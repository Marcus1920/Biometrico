<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class LastLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if  (Auth::check())
        {

         $rol_id  =  Auth::user()->role;
         if($rol_id == 1)
         {

             return redirect('/home');
         }
        }


       return view  ('auth.sites') ;
    }
}
