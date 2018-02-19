<?php
/**
 * Created by PhpStorm.
 * User: Marcus -TM
 * Date: 1/31/2018
 * Time: 21:42
 */

namespace App\ServerConfigurationServices;


class SiteControllesServices
{

    public  function  SetupControllers($SiteController_conifg  , $SiteName)
    {
        $data  = "data" ;
        $shedule  = "shedule" ;
        $record = "record";
        // Function  to  create  a  Controller
        $fn = "C:/Users/user-04/Desktop/Biome/Biometrico/app\Http/Controllers/AttendecyController.php";


        $Create_controller = fopen("C:/Users/user-04/Desktop/Biome/Biometrico/app/Http/Controllers/".$SiteController_conifg.".php", "w") ;


        $methode  = "<?php

            namespace App\Http\Controllers;
            
            use Illuminate\Http\Request;
            use Illuminate\Support\Facades\Input;
            class $SiteController_conifg extends Controller
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
                   $$data = Input::all();
                   
                   $$record = \DB::connection('mysql$SiteName')
                       ->table('attendance')
                       ->where('ATTENDANCE_KEY', Input::get('ATTENDANCE_KEY'))
                       ->first();
            
                   if($$record == NULL)
                   {
                       \DB::connection('mysql$SiteName')
                           ->table('attendance')
                           ->insert($$data);
            
                       return 'ok';
                   }
                   else if($$record != NULL)
                   {
                       \DB::connection('mysql$SiteName')
                           ->table('attendance')
                           ->where('ATTENDANCE_KEY', Input::get('ATTENDANCE_KEY'))
                           ->delete();
            
                       \DB::connection('mysql$SiteName')
                           ->table('attendance')
                           ->insert($$data);
            
                       return 'ok';
                   }
                   
                }
                
                
                public function workshedulstore()
                {
                 $$data = Input::all();
                 
                 $$record = \DB::connection('mysql$SiteName')
                       ->table('work_schedule')
                       ->where('WORK_SCHEDULE_KEY', Input::get('WORK_SCHEDULE_KEY'))
                       ->first();
            
                   if($$record == NULL)
                   {
                       \DB::connection('mysql$SiteName')
                           ->table('work_schedule')
                           ->insert($$data);
            
                       return 'ok';
                   }
                   else if($$record != NULL)
                   {
                       \DB::connection('mysql$SiteName')
                           ->table('work_schedule')
                           ->where('WORK_SCHEDULE_KEY', Input::get('WORK_SCHEDULE_KEY'))
                           ->delete();
            
                       \DB::connection('mysql$SiteName')
                           ->table('work_schedule')
                           ->insert($$data);
            
                       return 'ok';
                   }
                
                }
                
                public function clockingliststore()
                {
                  $$data = Input::all();
              
                       \DB::connection('mysql$SiteName')
                           ->table('clocking_temp_print')
                           ->insert($$data);
            
                       return 'ok';
                   
                }
                
                
                
                 public  function  index ()
                {
            
                    $$shedule= \DB::connection('mysql$SiteName')->table('attendance')
                        ->select(
                            \DB::raw(
                                \"
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
                                        
                                                  
                                            \"
                            )
                        )
                        ->get();
            
                    return json_encode($$shedule) ;
                }
            }
            " ;

                    fwrite($Create_controller, $methode);
                    fclose($Create_controller);

          return   "controller sucfullly  created " ;
    }

}