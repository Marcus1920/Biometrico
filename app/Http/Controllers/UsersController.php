<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Site;
use App\Role;

class UsersController extends Controller
{

    //
    public function getallUsers()
    {
        $Users=User::all();
        return $Users;
    }

    public function getSideCode()
    {
        $siteCode=Site::select([
            'id',
            'site_code',
            'site_name',
            'end_point']
        )->get();
        return $siteCode;
    }
    public function login(Request $request)
    {


    }
    public function getRole()
    {
        $roles=Role::all();
         return view('auth.register',compact('roles'));


    }
}
