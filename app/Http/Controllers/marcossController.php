<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marcossController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getattendanceList()
    {
        return view('home');
    }
    
    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlmarcoss')->table('new_users')
            ->select(
                \DB::raw(
                    "
                                new_users.name      ,             
                                new_users.surname                              
             
                                "
                )
            )
            ->get();

        return json_encode($shedule) ;
    }
}
