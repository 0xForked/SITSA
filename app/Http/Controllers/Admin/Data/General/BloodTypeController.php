<?php

namespace App\Http\Controllers\Admin\Data\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloodController extends Controller
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
        // return view('admin.general-data-mgmt.zones.index');
    }

}
