<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Site;
use App\role;
use App\Company;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{

    public function registerUser()
    {
        $roles=role::all();
        $selectedRole=User::first()->role_id;

        $companies=Company::all();
        $selectedCompany=User::first()->company_id;

        return view('auth.registration',compact('roles','selectedRole','companies','selectedCompany'));
    }

    public function create(Request $data)
    {
        $hasher = app()->make('hash');

        $user       = new User();
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->company_id = $data['company_id'];
        $user->role = $data['role'];
        $user->cellphone = $data['cellphone'];
        $user->email = $data['email'];
        $user->password = $hasher->make($data['password']);
        $user->save();

        return Redirect('/home');
    }

    public function login()
    {
        $response = array();

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
                return "Wrong Password";
            }
        }
        else
        {
            return "Wrong email";
        }
    }
    public  function forgotPassword()
    {
        $response=array();

        $email=input::get('emails');

        $user=User::where('email','=',$email)->first();

        if(($user)>0)

        {
            $message = "your  new  password  is  ";
            $response["error"] = false;
            $data = array(

                'name' => $user->name,
                'passsword' => $user->password,
                'content' => $message

            );

            \Mail::send('emails.forgetPassword', $data, function ($message) use ($user) {
                $message->from('Info@Biometrico.cloud', 'Biometrico');
                $message->to($user->email)->subject("Biometrico Notification! ");

            });

            $response["message"] = "You have successfully resetted your password check  your  email for a new password";

        } else {
            $response["error"] = true;
            $response["message"] = "Sorry, you have not registered yet";
        }

        return \Response::json($response);

        }

        public  function forget()
        {
            return view('emails.forgetPassword');
        }




}
