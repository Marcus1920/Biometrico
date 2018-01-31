<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitAController extends Controller
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
    
    
      public  function store  (Request  $POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            75
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IllFMHdcLzdNVHJ2TUZ1RDVSNWtDdVB3PT0iLCJ2YWx1ZSI6IkVraDBRalJUQlk1eHo2bnczQk5qOFdCMUJjODJoQnBWaUpwZEtUaVV0MTFLUzlhWG5PcDJxYjhcL3hIdTU4RkJ2NFcwTlduUlpTUFg4VzRwXC9jOHZtY3c9PSIsIm1hYyI6ImZkNjM2OGUwYmE1NjYyNjRmYjZiZTBjOWI3MDg1MTM3MjFlYzljZjZjZTIyODUxMGY2ODNjNmVkY2Q1N2QxMDIifQ%3D%3D; laravel_session=eyJpdiI6IjNtMjdpMjFZc2NuQmF3cFhvWHI2T3c9PSIsInZhbHVlIjoiUElMUnRmOHZPdE5yQTZGbVVySldxQ2t5OEVFM1FQUVgrOVk5cGI3RGNYaWdsVU9id1ptSldIZjFtNmV2SGtvd0lhZWJcLzMyU1wvRVNuT3ZVaWVPVjlXQT09IiwibWFjIjoiNjM2NmJkYjBmMjYyMjMxYTZmOGUzNDY2ZDVmMjI3MDRlZTdiMTAyODZkMzc0ODQ4MTM3NzQ4MjZiMzMyODhkNyJ9
Host:                      localhost:800
Origin:                    http://localhost:800
Referer:                   http://localhost:800/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=6SegkEvRv0nrfjTzMVastASPaN97yEdzjoIVEYFG&company_id=1&SITE_NAME=sitA)
     {

         \DB::connection('mysqllaraconection')->table('attendance')->insert($());
         

     }
    
    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlsitA')->table('attendance')
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
