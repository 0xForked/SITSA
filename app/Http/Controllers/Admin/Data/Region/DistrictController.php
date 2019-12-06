<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Models\Region\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
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
        $districts = District::with(['subdistricts' => function($query) {
            $query->withCount('urbanVillage');
        }])->paginate(5);

        if ($request->search) {
            $districts = District::with(['subdistricts' => function($query) {
                $query->withCount('urbanVillage');
            }])->where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.region-data-mgmt.districts.index', compact('districts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $district = District::findOrFail($id);
        return response()->json($district);
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

        $district = $request->only('name', 'code', 'description');
        $action = District::create($district);

        if (!$action) {
            return redirect()->route('admin.region.districts.index')
                ->with('error','Failed add new District');
        }

        return redirect()->route('admin.region.districts.index')
                        ->with('success','District created successfully');

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

        $district = District::findOrFail($request->id);
        $district->name = $request->name;
        $district->code = $request->code;
        $district->description = $request->description;
        $district->save();

        return redirect()->route('admin.region.districts.index')
                        ->with('success','District updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        District::findOrFail($id)->delete();
        return redirect()
                ->route('admin.region.districts.index')
                ->with('success', 'District delete successfully');
    }
}
