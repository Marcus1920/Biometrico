<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use App\SuperAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Company;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected $redirectTo = '/adminDashboard';

    public function guard()
    {
        return Auth::guard('superAdmin');
    }

    public function index()
    {
        return view('auth.adminLogin');
    }

    public function dashboard()
    {
        $user = Auth::guard('superAdmin')->user();

        $company = Company::all();

        $sites = Site::with('company')->get();

        return view('SuperAdmin.Dashboard',compact('user','company','sites'));
    }

}
