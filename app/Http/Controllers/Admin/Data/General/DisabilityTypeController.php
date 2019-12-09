<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\DisabilityType;
use Illuminate\Http\Request;

class DisabilityTypeController extends Controller
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
        $disabilities = DisabilityType::paginate(5);

        if ($request->search) {
            $disabilities = DisabilityType::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.disabilities.index', compact('disabilities'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disability = DisabilityType::findOrFail($id);
        return response()->json($disability);
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

        $disability = $request->only('name', 'description');
        $action = DisabilityType::create($disability);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Disability type');
        }

        return redirect()->back()->with('success','Disability type created successfully');
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

        $disability = DisabilityType::findOrFail($request->id);
        $disability->name = $request->name;
        $disability->description = $request->description;
        $disability->save();

        return redirect()->back()->with('success','Disability type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DisabilityType::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.disabilities.index')
                ->with('success', 'Disability type delete successfully');
    }
}
