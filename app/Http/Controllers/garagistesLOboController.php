<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes\Marcus;
use App\classes\xmlapi;
class garagistesLOboController extends Controller
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

     public  function store  (Request  $request)
     {







         try {




             \DB::connection('mysqllaraconection')->table('attendance')->insertUpdate($request->all());
             $response   = array () ;
             $response['erro']= false  ;
             $response['status']= 200  ;
             $response['message']= 'success' ;

             return  1 ;
         } catch (\Exception $e) {


             return 0 ;
         }


        // \DB::connection('mysqllaraconection')->table('attendance')->insert($request->all());


     }

    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlgaragistesLObo')->table('attendance')
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
