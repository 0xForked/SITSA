<?php

namespace App\Http\Controllers\Admin\Data\General\Asset;

use App\Http\Controllers\Controller;
use App\Models\General\AssetType;
use Illuminate\Http\Request;

class AssetTypeController extends Controller
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
        $types = AssetType::paginate(5);

        if ($request->search) {
            $types = AssetType::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.assets.types.index', compact('types'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = AssetType::findOrFail($id);
        return response()->json($type);
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
            'type' => 'required'
        ]);

        $type = $request->only('name', 'description', 'type');
        $action = AssetType::create($type);

        if (!$action) {
            return redirect()->route('admin.general.assets.types.index')
                ->with('error','Failed add new Asset type');
        }

        return redirect()->route('admin.general.assets.types.index')
                        ->with('success','Asset type created successfully');
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

        $type = AssetType::findOrFail($request->id);
        $type->name = $request->name;
        $type->description = $request->description;
        $type->type = $request->type;
        $type->save();

        return redirect()->route('admin.general.assets.types.index')
                        ->with('success','Asset type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssetType::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.assets.types.index')
                ->with('success', 'Asset type delete successfully');
    }
}
