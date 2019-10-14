<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use jeremykenedy\LaravelLogger\App\Models\Activity;

class ProfileController extends Controller
{

    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $account = Auth::user();
        $activities = $this->repository->getAccessActivity($account->id, 2); // {number} limit
        $activities_count = $this->repository->getAccessActivityCount();
        return view('account.profile', compact('account', 'activities', 'activities_count'));
    }

}
