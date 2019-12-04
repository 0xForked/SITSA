<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\BloodType;
use Illuminate\Http\Request;

class BloodTypeController extends Controller
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
        $bloods = BloodType::paginate(10);

        if ($request->search) {
            $bloods = BloodType::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.bloods.index', compact('bloods'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blood = BloodType::findOrFail($id);
        return response()->json($blood);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'type' => 'required',
    //         'description' => 'required',
    //     ]);
    //     $blood = $request->only('name', 'type', 'description');
    //     $action = BloodType::create($blood);
    //     if (!$action) {
    //         return redirect()->route('admin.general.bloods.index')
    //             ->with('error','Failed add new Blood type');
    //     }
    //     return redirect()->route('admin.general.bloods.index')
    //                     ->with('success','Blood type created successfully');
    // }

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
            'type' => 'required'
        ]);

        $blood = BloodType::findOrFail($request->id);
        $blood->name = $request->name;
        $blood->type = $request->type;
        $blood->description = $request->description;
        $blood->save();

        return redirect()->route('admin.general.bloods.index')
                        ->with('success','Blood type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BloodType::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.bloods.index')
                ->with('success', 'Blood type delete successfully');
    }
}
