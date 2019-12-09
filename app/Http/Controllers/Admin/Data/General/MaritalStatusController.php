<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\Marital;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
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
        $maritals = Marital::paginate(5);

        if ($request->search) {
            $maritals = Marital::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.maritals.index', compact('maritals'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marital = Marital::findOrFail($id);
        return response()->json($marital);
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

        $marital = $request->only('name', 'description');
        $action = Marital::create($marital);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Marital Status');
        }

        return redirect()->back()->with('success','Marital status created successfully');
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

        $marital = Marital::findOrFail($request->id);
        $marital->name = $request->name;
        $marital->description = $request->description;
        $marital->save();

        return redirect()->back()->with('success','Marital status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Marital::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.maritals.index')
                ->with('success', 'Marital status delete successfully');
    }
}
