<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Redirect;

class RolesController extends Controller
{

    public function index()
    {
//        $roles=role::select(array('id','name','created_at','updated_at'));
//
//        return $roles;
        $roles=role::all();
        $selectedRole=User::first()->role_id;

        $companies=Company::all();

        $selectedCompany=User::first()->company_id;

        return view('auth.register',compact('roles','selectedRole','companies','selectedCompany'));


    }


//
//    public function show()
//    {
//        $roles=role::all();
//
//        return view('auth.register',compact('roles'));
//    }


}
