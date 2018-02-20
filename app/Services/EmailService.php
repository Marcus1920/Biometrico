<?php

namespace App\Services;

use Illuminate\Foundation\Http\Requests;

use App\User;

class EmailService
{
    public  function sendRegister($data,$email,$subject)
    {

        \Mail::send('emails.registrationEmail' ,$data, function ($message) use ($email,$subject)
        {
            $message->from('info@biometrico.com', "BioCloud");
            $message->subject($subject);
            $message->to($email);
        });


        return redirect('usersList');
    }

}






































//    public function emailReg()
//    {

//        return User::all();



//        return $name;

//    }

//        public  function forgotPassword($email)
//        {
//        $response=array();
//
////        $email=input::get('emails');
////         $email='ok';
//        $user=User::where('email','=',$email)->first();
//
//        if(($user)>0)
//
//        {
//            $message = "your  new  password  is  ";
//            $response["error"] = false;
//            $data = array(
//
//                'name' => $user->name,
//                'passsword' => $user->password,
//                'content' => $message
//
//            );
//
//            \Mail::send('emails.forgetPassword', $data, function ($message) use ($user) {
//                $message->from('Info@Biometrico.com', 'Biometrico');
//                $message->to($user->email)->subject("Biometrico Notification! ");
//
//            });
//
//            $response["message"] = "You have successfully resetted your password check  your  email for a new password";
//
//        } else
//            {
//            $response["error"] = true;
//            $response["message"] = "Sorry, you have not registered yet";
//        }
//
//        return \Response::json($response);
//
//    }
//


//}