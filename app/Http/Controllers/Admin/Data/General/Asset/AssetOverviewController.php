<?php

namespace App\Http\Controllers\Admin\Data\General\Asset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetOverviewController extends Controller
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
    public function index()
    {
        return view('admin.general-data-mgmt.assets.index');
    }

}
