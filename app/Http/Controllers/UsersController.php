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

            'message1'=> "User Registration Confirmation",
            'content'=>" Thank you! for your registration. Please take note of your login credentials"
        );


        $subject = "successfully registered";

        $newEmailService= new EmailService();

        $newEmailService->sendRegister($data,$email,$subject);


//        return "you are successufully registered";
        return redirect('usersList');


    }

    public function createExternal(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
        ]);

        $file = $request->file('image');
        // image upload in public/upload folder.

        $destinationFolder = "uploads";

        if(!\File::exists($destinationFolder)) {
            \File::makeDirectory($destinationFolder,0777,true);
        }

//        $name =    $file->getClientOriginalName();
        $name="";

//        $file->move($destinationFolder,$name) ;

        $default = "Background/5.jpg";

        $newCompany = new Company();
        $newCompany->logo = env('APP_URL').$destinationFolder.'/'.$name;
        $newCompany->name = $request['companyName'];
        $newCompany->color = env('APP_URL').$default;
        $newCompany->save();


        $hasher = app()->make('hash');

        $user = new User();
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->company_id = $newCompany->id;
        $user->role = 2;
        $user->cellphone = $request['cellphone'];
        $user->email = $request['email'];
        $user->password = $hasher->make($request['password']);

        $user->save();


        $data = array(

            'name'      =>      $user->name,
            'email' =>      $user->email,
            'password'=>  $request['password'],


            'message1'=> "Welcome to BioCloud",
            'content'=>"Congratulations! We have received your registration,please wait for the approval email, you can use the following credentials to logging."

        );

        $email=$user->email;

        $subject = "Welcome User";

        $newEmailService= new EmailService();

        $newEmailService->sendRegister($data,$email,$subject);

        return redirect('landregister');

//        return "ok";

    }


    public function getUserList()
    {


        $user = User::find(Auth::user()->id);

        $users = User::where('company_id',$user->company_id)
            ->where('active',0)
            ->with('company')
            ->with('role')
            ->orderBy('id','DESC')
            ->get();

        return view('Users.users',compact('users'));
    }

    
    public function activate($id)
    {

        User::where('id',$id)
            ->update(['active'=>1]);

        $users=User::find($id)->first();


        $data = array(

            'name'      =>      $users->name,
            'email' =>      $users->email,
            'password'=>   "",


            'message1'=> "User Activation Confirmation",
            'content'=>"Congratulations! You have been approved, you can use the following credentials to logging. Email: $users->email  Password: $users->password",
            'login' => "click here to login"

                     );

        $email=$users->email;

        $subject = "Approval notification";

        $newEmailService= new EmailService();

        $newEmailService->sendRegister($data,$email,$subject);


        return Redirect::to('/activeUserList');
    }

    public function getDeactivetedList()
    {
        $user = User::find(Auth::user()->id);

        $users = User::where('company_id',$user->company_id)
            ->where('active',1)
            ->with('company')
            ->with('role')
            ->orderBy('id','DESC')
            ->get();

        return view('Users.active',compact('users'));
    }

    public function deactive($id)
    {


        User::where('id',$id)
            ->update(['active'=>0]);


        $users=User::find($id);
        $data = array(

            'name'      =>      $users->name,
            'email' =>      $users->email,

            'password'=>   $users->password,

            'message1'=> "User DeActivation Confirmation",
            'content'=>"Your account has been Suspended!!!:  ",
            'login' => ""

        );

        $email=$users->email;

        $subject = "Inactivation notification";

        $newEmailService= new EmailService();

        $newEmailService->sendRegister($data,$email,$subject);


        return Redirect::to('/usersList');
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

