<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\FamilyTree;
use Illuminate\Http\Request;

class FamilyTreeController extends Controller
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
        $family_trees = FamilyTree::paginate(5);

        if ($request->search) {
            $family_trees = FamilyTree::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.familytrees.index', compact('family_trees'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $family_tree = FamilyTree::findOrFail($id);
        return response()->json($family_tree);
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

        $family_tree = $request->only('name', 'description');
        $action = FamilyTree::create($family_tree);

        if (!$action) {
            return redirect()->route('admin.general.family-trees.index')
                ->with('error','Failed add new Move type');
        }

        return redirect()->route('admin.general.family-trees.index')
                        ->with('success','Move type created successfully');
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

        $family_tree = FamilyTree::findOrFail($request->id);
        $family_tree->name = $request->name;
        $family_tree->description = $request->description;
        $family_tree->save();

        return redirect()->route('admin.general.family-trees.index')
                        ->with('success','Move type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FamilyTree::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.family-trees.index')
                ->with('success', 'Move type delete successfully');
    }
}
