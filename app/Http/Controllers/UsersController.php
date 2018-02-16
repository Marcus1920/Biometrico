<?php

namespace App\Http\Controllers;

use Egulias\EmailValidator\Warning\EmailTooLong;
use Illuminate\Http\Request;
use App\User;
use App\Site;
use App\role;
use App\Company;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Services\EmailService;

class UsersController extends Controller
{
//    protected $users;
//
//    public function  __construct(EmailService $users )
//    {
//        $this->User=$users;
//    }

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

        $user = new User();
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->company_id = $data['company_id'];
        $user->role = $data['role'];
        $user->cellphone = $data['cellphone'];
        $user->email = $data['email'];
        $user->password = $hasher->make($data['password']);

        $user->save();

        $email = $user->email;

        $data=array
        (
            'name' =>$user->name,
            'email' =>$user->email,
            'password'=>$data['password'],

            'message1'=> "User Registration Confirmation"
        );

        $newEmailService= new EmailService();

        $newEmailService->sendRegister($data,$email);

//        return "you are successufully registered";
        return redirect('usersList');

    }


    public function getUserList()
    {
        $user = User::find(Auth::user()->id);

        $users = User::where('company_id',$user->company_id)
            ->with('company')
            ->with('role')
            ->orderBy('id','DESC')
            ->get();

        return view('Users.users',compact('users'));
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
                $response["msg"] = 'Wrong Email or  Password'; 
              return response()->json($response);
            }
        }
        else
        {
               $response["msg"] = 'Wrong Email or  Password'; 
              return response()->json($response);
            
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

            \Mail::send('Notifications.ResetPassword', $data, function ($message) use ($user) {
                $message->from('Info@Biometrico.com', 'Biometrico');
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




    //    public function regEmail()
//    {
//        $email=new EmailService();
//
//        $email->emailReg();
//
//        return $email->emailReg();
//    }


//  public function index(EmailService $service)
//
//  {
//      return $service->emailReg();
//
//  }

//  public function getname(EmailService $service)
//  {
//
//
//      $email=input::get('emails');
//      return $service->forgotPassword('mozaamisi93@gmail.com');
//  }
//
//
//
//  public function regSent( EmailService $service)
//  {
//
//      $email= new EmailService();
//
//      $this->sendRegister($email);
//
//
//  }

//    public function password()
//    {
//        return view('passwords.rest');
//    }

//    public function resetPasword( Request $request)
//    {
//        $this->validate($request, [
//            'password' => 'required|confirmed|min:6',
//        ]);
//
//        $user = $request->user();
//        $user->password = bcrypt($request->get('password'));
//        $user->save();
//
//        return redirect()->route('home');
//
//    }


//
//        Mail::send('emails.registrationEmail',$data,function ($message) use ($user)
//        {
//            $message->from('biometrico.com', "Biometrico");
//            $message->to($user->email('mozaamisi93@gmail.com'));
//            $message->subject("successfully registered");
////            $message->to($user['mozaamisi93@gmail.com']);
//        });

//        $email =new EmailService('name,surname,email');
//
//        return $data->sendRegister('mozaamisi93@gmail.com');

//        return $service->forgotPassword('mozaamisi93@gmail.com');


}

