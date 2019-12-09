<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\TrainingType;
use Illuminate\Http\Request;

class TrainingTypeController extends Controller
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
        $trainings = TrainingType::paginate(5);

        if ($request->search) {
            $trainings = TrainingType::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.trainings.index', compact('trainings'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = TrainingType::findOrFail($id);
        return response()->json($training);
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

        $training = $request->only('name', 'description');
        $action = TrainingType::create($training);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Training type');
        }

        return redirect()->back()->with('success','Training type created successfully');
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

        $training = TrainingType::findOrFail($request->id);
        $training->name = $request->name;
        $training->description = $request->description;
        $training->save();

        return redirect()->back()->with('success','Training type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TrainingType::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.trainings.index')
                ->with('success', 'Training type delete successfully');
    }
}
