<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Models\Region\RegionPosition;
use Illuminate\Http\Request;

class RegionPositionController extends Controller
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
        $positions = RegionPosition::paginate(5);

        if ($request->search) {
            $positions = RegionPosition::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.region-data-mgmt.positions.index', compact('positions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = RegionPosition::findOrFail($id);
        return response()->json($position);
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

        $position = $request->only('name', 'description');
        $action = RegionPosition::create($position);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Region Position');
        }

        return redirect()->back()->with('success','Region Position created successfully');

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

        $positions = RegionPosition::findOrFail($request->id);
        $positions->name = $request->name;
        $positions->description = $request->description;
        $positions->save();

        return redirect()->back()->with('success','Region Position updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegionPosition::findOrFail($id)->delete();
        return redirect()
                ->route('admin.region.positions.index')
                ->with('success', 'Region Position delete successfully');
    }
}
