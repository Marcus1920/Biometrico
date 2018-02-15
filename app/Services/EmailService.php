<?php

namespace App\Services;

use Illuminate\Foundation\Http\Requests;
use App\User;

class EmailService
{

    public function emailReg()
    {

//        return User::all();



//        return $name;

    }

        public  function forgotPassword($name,$password,$surname)
        {
        $response=array();

//        $email=input::get('emails');
         $email='ok';
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
                $message->from('Info@Biometrico.com', 'Biometrico');
                $message->to($user->email)->subject("Biometrico Notification! ");

            });

            $response["message"] = "You have successfully resetted your password check  your  email for a new password";

        } else
            {
            $response["error"] = true;
            $response["message"] = "Sorry, you have not registered yet";
        }

        return \Response::json($response);

    }
//
//
//      public function registration()
//      {
//
//
//
//
//      }




}