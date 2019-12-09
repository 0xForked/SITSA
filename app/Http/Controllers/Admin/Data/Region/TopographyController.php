<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Models\Region\Topography;
use Illuminate\Http\Request;

class TopographyController extends Controller
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
        $topographies = Topography::paginate(5);

        if ($request->search) {
            $topographies = Topography::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.region-data-mgmt.topographies.index', compact('topographies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topography = Topography::findOrFail($id);
        return response()->json($topography);
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

        $topography = $request->only('name', 'code');
        $action = Topography::create($topography);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Topography');
        }

        return redirect()->back()->with('success','Topography created successfully');

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

        $topography = Topography::findOrFail($request->id);
        $topography->name = $request->name;
        $topography->code = $request->code;
        $topography->save();

        return redirect()->back()->with('success','Topography updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Topography::findOrFail($id)->delete();
        return redirect()
                ->route('admin.region.topographies.index')
                ->with('success', 'Topography delete successfully');
    }
}
