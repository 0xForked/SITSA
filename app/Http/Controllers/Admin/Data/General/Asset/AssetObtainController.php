<?php

namespace App\Http\Controllers\Admin\Data\General\Asset;

use App\Http\Controllers\Controller;
use App\Models\General\AssetObtain;
use Illuminate\Http\Request;

class AssetObtainController extends Controller
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
        $obtains = AssetObtain::paginate(5);

        if ($request->search) {
            $obtains = AssetObtain::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.assets.obtains.index', compact('obtains'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obtain = AssetObtain::findOrFail($id);
        return response()->json($obtain);
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

        $obtain = $request->only('name', 'description');
        $action = AssetObtain::create($obtain);

        if (!$action) {
            return redirect()->route('admin.general.assets.obtains.index')
                ->with('error','Failed add new Asset obtain');
        }

        return redirect()->route('admin.general.assets.obtains.index')
                        ->with('success','Asset obtain created successfully');
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

        $obtain = AssetObtain::findOrFail($request->id);
        $obtain->name = $request->name;
        $obtain->description = $request->description;
        $obtain->save();

        return redirect()->route('admin.general.assets.obtains.index')
                        ->with('success','Asset obtain updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssetObtain::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.assets.obtains.index')
                ->with('success', 'Asset obtain delete successfully');
    }
}
