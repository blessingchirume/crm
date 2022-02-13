<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyUsers;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


        $users          = User::all();
        $clients        = Company::all();
        $projects       = Project::all();

        $user           = User::where('id', Auth::user()->id)->first();

        $companyId      = CompanyUsers::where('user_id', Auth::user()->id)->first();
        $companyUsers   = CompanyUsers::where('company_id', $companyId)->get()->count();

        $companyProjects = Project::where('client_id', $companyId)->get()->count();
        if (!Auth::user()->roles->pluck('name')->first() == "Client User") {
            $totals = array("users" => $users->count(), "clients" => $clients->count(), "projects" => $projects->count());
        } else {
            $totals = array("users" => $companyUsers, "clients" => $clients->count(), "projects" => $companyProjects);
        }

        return view('admin.dashboard.dashboard', compact('totals'));
    }
}
