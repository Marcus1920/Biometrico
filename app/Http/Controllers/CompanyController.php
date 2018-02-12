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

        return response()->json($company);
    }

    public function create()
    {
        return view('Company.create');
    }

    public function store(Request $request)
    {
        $newCompany = new Company();
        $newCompany->name = $request['name'];
        $newCompany->save();

        return redirect('/companies');
    }

    public function getCompanyList()
    {
        $companies = Company::all();

        return response()->json($companies);
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



