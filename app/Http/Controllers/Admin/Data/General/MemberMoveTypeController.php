<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\MemberMoveType;
use Illuminate\Http\Request;

class MemberMoveTypeController extends Controller
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
        $moves = MemberMoveType::paginate(5);

        if ($request->search) {
            $moves = MemberMoveType::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.membermoves.index', compact('moves'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $move = MemberMoveType::findOrFail($id);
        return response()->json($move);
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

        $move = $request->only('name', 'description');
        $action = MemberMoveType::create($move);

        if (!$action) {
            return redirect()->route('admin.general.member-moves.index')
                ->with('error','Failed add new Move type');
        }

        return redirect()->route('admin.general.member-moves.index')
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

        $move = MemberMoveType::findOrFail($request->id);
        $move->name = $request->name;
        $move->description = $request->description;
        $move->save();

        return redirect()->route('admin.general.member-moves.index')
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
        MemberMoveType::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.member-moves.index')
                ->with('success', 'Move type delete successfully');
    }
}
