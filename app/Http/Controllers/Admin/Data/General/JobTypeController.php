<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use App\Models\General\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
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
        $jobs = JobType::paginate(5);

        if ($request->search) {
            $jobs = JobType::where(
                'name',
                'LIKE',
                "%$request->search%"
            )->paginate(5);
        }

        return view('admin.general-data-mgmt.jobs.index', compact('jobs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = JobType::findOrFail($id);
        return response()->json($job);
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

        $job = $request->only('name', 'description');
        $action = JobType::create($job);

        if (!$action) {
            return redirect()->back()->with('error','Failed add new Job');
        }

        return redirect()->back()->with('success','Job created successfully');

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

        $job = JobType::findOrFail($request->id);
        $job->name = $request->name;
        $job->description = $request->description;
        $job->save();

        return redirect()->back()->with('success','Job updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobType::findOrFail($id)->delete();
        return redirect()
                ->route('admin.general.jobs.index')
                ->with('success', 'Job delete successfully');
    }
}
