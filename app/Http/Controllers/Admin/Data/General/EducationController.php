<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $educations = Education::paginate(5);

        if ($request->search) {
            $educations = Education::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.educations.index', compact('educations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $education = Education::findOrFail($id);
        return response()->json($education);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $education = $request->only('name', 'description');
        $action = Education::create($education);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Education');
        }

        return redirect()->back()->with('success','Education created successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $education = Education::findOrFail($request->id);
        $education->name = $request->name;
        $education->description = $request->description;
        $education->save();

        return redirect()->back()->with('success','Education updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.educations.index')
                ->with('success', 'Education delete successfully');
    }
}
