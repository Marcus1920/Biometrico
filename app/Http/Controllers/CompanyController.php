<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Site;
use App\User;

class CompanyController extends Controller
{


    public function index()
    {
        $company = Company::with('site')->get();
        return $company;
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


//    public function getAllCompany()
//    {
//        $companies = Company::all();
//
//        return response()->Json(['data' => $companies->toArray()], 200);
////        return response()->Json($companies);
////        return $companies;
//
//    }


}



