<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Site;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Role;

class UsersController extends Controller
{
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
        $hasher = app()->make('hash');

        $email = Input::get('email');
        $password = Input::get('password');

        $login = User::where('email',$email)
            ->first();

        if($login != NULL)
        {
            if ($hasher->check($password, $login->password))
            {
                $user  = User::where('email',$login->email)
                    ->join('roles', 'users.role', '=', 'roles.id')
                    ->join('companies', 'users.company_id', '=', 'companies.id')
                    ->select(
                        \DB::raw(
                            "
                        users.id,
                        users.name,
                        users.surname,
                        users.company_id,
                        companies.name as company,
                        users.role,
                        roles.name as roleName,
                        users.cellphone,
                        users.email
                       "
                        )
                    )
                    ->first();

                return response()->json($user);
            }
            else
            {
                return "Wrong email or password";
            }
        }
        else
        {
            return "Wrong email or password";
        }
    }
    public function getRole()
    {
        $roles=Role::all();
         return view('auth.register',compact('roles'));
    }
}
