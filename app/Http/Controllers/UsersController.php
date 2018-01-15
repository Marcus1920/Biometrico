<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    //
    public function getallUsers()
    {
        $Users=User::all();
        return $Users;
    }
    public function login(Request $request)
    {

    }

}
