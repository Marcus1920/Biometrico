<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuperAdmin;

class SuperAdminController extends Controller
{

    public function create()
    {
        return view('SuperAdmin.create');
    }

    public function store(Request $data)
    {
        $hasher = app()->make('hash');

        $user       = new SuperAdmin();
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->cellphone = $data['cellphone'];
        $user->email = $data['email'];
        $user->password = $hasher->make($data['password']);
        $user->save();

        return Redirect('/superAdminList');
    }

    public function adminList()
    {
        $adminList=SuperAdmin::all();

        return view('SuperAdmin.list',compact('adminList'));
    }
}
