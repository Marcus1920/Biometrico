<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Site;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::with('site')->get();
        return $company;
    }
}
