<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Models\Region\Subdistrict;
use App\Models\Region\UrbanVillage;
use Illuminate\Http\Request;

class UrbanVillageController extends Controller
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
        $subdistricts = Subdistrict::all();
        $urban_villages = UrbanVillage::with(['Subdistrict' => function($query) {
            $query->with('District');
        }])->paginate(5);

        if ($request->search) {
            $urban_villages = UrbanVillage::with(['Subdistrict' => function($query) {
                $query->with('District');
            }])->where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.region-data-mgmt.urbanvillages.index', compact('urban_villages','subdistricts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $urban_villages = UrbanVillage::findOrFail($id);
        return response()->json($urban_villages);
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

        $urban_village = $request->only('name', 'code', 'description', 'subdistrict_id');
        $action = UrbanVillage::create($urban_village);

        if (!$action) {
            return redirect()->route('admin.region.urbanvillages.index')
                ->with('error','Failed add new Urban Village');
        }

        return redirect()->route('admin.region.urbanvillages.index')
                        ->with('success','Urban Village created successfully');

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

        $urban_village = UrbanVillage::findOrFail($request->id);
        $urban_village->name = $request->name;
        $urban_village->code = $request->code;
        $urban_village->description = $request->description;
        $urban_village->subdistrict_id = $request->subdistrict_id;
        $urban_village->save();

        return redirect()->route('admin.region.urbanvillages.index')
                        ->with('success','Urban Village updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UrbanVillage::findOrFail($id)->delete();
        return redirect()
                ->route('admin.region.urbanvillages.index')
                ->with('success', 'Urban Village delete successfully');
    }
}
