<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colorgroupesasasssController extends Controller
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

        $shedule= \DB::connection('mysqlcolorgroupesasasss')->table('attendance')
            ->select(
                \DB::raw(
                    "
                                attendance.ATTENDANCE_KEY     ,             
                                attendance.COMPANY_KEY      ,                       
                                attendance.TERMINAL_KEY      ,
                                attendance.TERMINAL_REC_NO  ,
                                attendance.DEPARTMENT_KEY    ,
                                attendance.ATTENDANCE_DATE  ,
                                attendance.ATTENDANCE_TIME  ,
                                attendance.EVENT_KEY      ,
                                
                                attendance.DEVICE_CONFIGURATION_KEY    ,
                                attendance.CALCULATED  ,
                                attendance.VERIFIED       ,
                               
                                attendance.OPERATOR_KEY        ,
                                attendance.ENROLL_ID        
                            
                                      
                                "
                )
            )
            ->get();

        return json_encode($shedule) ;
    }
}
