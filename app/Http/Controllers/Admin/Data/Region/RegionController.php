<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Models\Region\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
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
        $regions = Region::paginate(5);

        if ($request->search) {
            $regions = Region::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.region-data-mgmt.regions.index', compact('regions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = Region::findOrFail($id);
        return response()->json($region);
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
        ]);

        $region = $request->only('name', 'code');
        $action = Region::create($region);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Region');
        }

        return redirect()->back()->with('success','Region created successfully');

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

        $region = Region::findOrFail($request->id);
        $region->name = $request->name;
        $region->code = $request->code;
        $region->save();

        return redirect()->back()->with('success','Region updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Region::findOrFail($id)->delete();
        return redirect()
                ->route('admin.region.regions.index')
                ->with('success', 'Region delete successfully');
    }
}
