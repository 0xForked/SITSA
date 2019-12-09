<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Models\Region\District;
use App\Models\Region\Subdistrict;
use Illuminate\Http\Request;

class SubdistrictController extends Controller
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
        $districts = District::all();
        $subdistricts = Subdistrict::withCount('urbanVillage')->with('district')->paginate(5);

        if ($request->search) {
            $subdistricts = Subdistrict::withCount('urbanVillage')->with('district')->where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.region-data-mgmt.subdistricts.index', compact('subdistricts', 'districts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $district = Subdistrict::findOrFail($id);
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

        $district = $request->only('name', 'code', 'description', 'district_id');
        $action = Subdistrict::create($district);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Subdistrict');
        }

        return redirect()->back()->with('success','Subdistrict created successfully');

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

        $district = Subdistrict::findOrFail($request->id);
        $district->name = $request->name;
        $district->code = $request->code;
        $district->description = $request->description;
        $district->district_id = $request->district_id;
        $district->save();

        return redirect()->back()->with('success','Subdistrict updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subdistrict::findOrFail($id)->delete();
        return redirect()
                ->route('admin.region.subdistricts.index')
                ->with('success', 'Subdistrict delete successfully');
    }
}
