<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\Ethnic;
use Illuminate\Http\Request;

class EthnicController extends Controller
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
        $ethnics = Ethnic::paginate(5);

        if ($request->search) {
            $ethnics = Ethnic::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.ethnic.index', compact('ethnics'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ethnic = Ethnic::findOrFail($id);
        return response()->json($ethnic);
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

        $ethnic = $request->only('name', 'description');
        $action = Ethnic::create($ethnic);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Ethnic');
        }

        return redirect()->back()->with('success','Ethnic created successfully');

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

        $ethnic = Ethnic::findOrFail($request->id);
        $ethnic->name = $request->name;
        $ethnic->description = $request->description;
        $ethnic->save();

        return redirect()->back()->with('success','Ethnic updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ethnic::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.ethnics.index')
                ->with('success', 'Ethnic delete successfully');
    }
}
