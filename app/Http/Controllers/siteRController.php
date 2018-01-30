<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class siteRController extends Controller
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
    public function attendencystore()
    {
        $data = Input::all();

        try {

            \DB::connection('mysqlsiteR')
                ->table('attendance')
                ->insert($data);

            return "ok";

         } catch (\Exception $e) {

            \DB::connection('mysqlsiteR')
                ->table('attendance')
            ->where('ATTENDANCE_KEY', Input::get('ATTENDANCE_KEY'))
            ->delete();

            \DB::connection('mysqlsiteR')
                ->table('attendance')
                ->insert($data);

            return "ok";
        }

    }
    
    
    public function workshedulstore()
    {
         $data = \Input::all();
         \DB::connection('mysqlsiteR')
             ->table('work_schedule')
             ->insert($data);

        $response = array();

        try {

            \DB::connection('mysqlsiteR')
                ->table('work_schedule')
                ->insert($data);

            $response["error"] = false;
            $response["message"] = "Success";

        } catch (\Exception $e) {

            \DB::connection('mysqlsiteR')
                ->table('work_schedule')
                ->where('ATTENDANCE_KEY', Input::get('ATTENDANCE_KEY'))
                ->delete();

            \DB::connection('mysqlsiteR')
                ->table('work_schedule')
                ->insert($data);

            $response["error"] = false;
            $response["message"] = "Successfully updated";
        }

        return \Response::json($response);
    }
    
    public function clockingliststore()
    {
      $data = \Input::all();
  
  
      \DB::connection('mysqlsiteR')->table('clocking_temp_print')->insert($data);
         
         return  'ok' ;
    }
    
    
    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlsiteR')->table('attendance')
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
