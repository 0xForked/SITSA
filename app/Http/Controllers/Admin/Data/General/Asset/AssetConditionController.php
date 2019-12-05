<?php

namespace App\Http\Controllers\Admin\Data\General\Asset;

use App\Http\Controllers\Controller;
use App\Models\General\AssetCondition;
use Illuminate\Http\Request;

class AssetConditionController extends Controller
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
        $conditions = AssetCondition::paginate(5);

        if ($request->search) {
            $conditions = AssetCondition::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.assets.conditions.index', compact('conditions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condition = AssetCondition::findOrFail($id);
        return response()->json($condition);
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

        $condition = $request->only('name', 'description');
        $action = AssetCondition::create($condition);

        if (!$action) {
            return redirect()->route('admin.general.assets.conditions.index')
                ->with('error','Failed add new Asset condition');
        }

        return redirect()->route('admin.general.assets.conditions.index')
                        ->with('success','Asset condition created successfully');
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

        $condition = AssetCondition::findOrFail($request->id);
        $condition->name = $request->name;
        $condition->description = $request->description;
        $condition->save();

        return redirect()->route('admin.general.assets.conditions.index')
                        ->with('success','Asset condition updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssetCondition::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.assets.conditions.index')
                ->with('success', 'Asset condition delete successfully');
    }
}
