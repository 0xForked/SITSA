<?php

namespace App\Http\Controllers\Admin\Data\General\Asset;

use App\Http\Controllers\Controller;
use App\Models\General\AssetManager;
use Illuminate\Http\Request;

class AssetManagerController extends Controller
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
        $managers = AssetManager::paginate(5);

        if ($request->search) {
            $managers = AssetManager::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.assets.managers.index', compact('managers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manager = AssetManager::findOrFail($id);
        return response()->json($manager);
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

        $manager = $request->only('name', 'description');
        $action = AssetManager::create($manager);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Asset manager');
        }

        return redirect()->back()->with('success','Asset manager created successfully');
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

        $manager = AssetManager::findOrFail($request->id);
        $manager->name = $request->name;
        $manager->description = $request->description;
        $manager->save();

        return redirect()->back()->with('success','Asset manager updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssetManager::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.assets.managers.index')
                ->with('success', 'Asset manager delete successfully');
    }
}
