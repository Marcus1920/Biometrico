<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteFController extends Controller
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
    public function attendencystore(Request  $POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            76
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6ImVoRXozQk93b2tucnR4bVVtNGpQNEE9PSIsInZhbHVlIjoiOHk1ZUgwY3pjcUw4Q3g5TUl4eVdCaWFaeUlSZnJEXC96OHJ1V2NWc1pSaWRDeWJWUkYxVnBIYVdReFc0cENaK1wvZjVsTEJ6YVwvNHc4ZnRjUHk2U2xMclE9PSIsIm1hYyI6ImFjOWZhYTY3ODNmZTNhYTVjMWFlOTlkNzQyMWMyNGMyNWE1ZmIwODM0ZWI3MzFlZTZkOTc3Y2M2MDdkNTEzYjAifQ%3D%3D; laravel_session=eyJpdiI6ImJISTZNVkxLOFRBbmRtb1wvallFQ2pBPT0iLCJ2YWx1ZSI6Ik9SNmNSVkVCZWFDQmpscnh0UEtOa0pZaEdHMzNiTUd2ZzcwYklhSGl1SXA2RE5XTEp0TSsyeXV6N1Z3UkNvSFJcL211ajdHSXpnQUxoUlhiUDNoYmFEdz09IiwibWFjIjoiN2ZkNjZmYjZiNTFmYmFhNDEwYzRlMmQyMDBkNjEwMGFmYTczNTA3ZGZhZmQ0NTk2ZjJkZDE5ZTdlM2RhNmM4ZCJ9
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&company_id=1&SITE_NAME=SiteF)
    {
      \DB::connection('mysqlSiteF')->table('attendance')->insert($());
         
         return  'ok' ;
    }
    
    
    public function workshedulstore()
    {
      \DB::connection('mysqlSiteF')->table('work_schedule')->insert($());
         
         return  'ok' ;
    }
    
    public function clockingliststore()
    {
      \DB::connection('mysqlSiteF')->table('clocking_temp_print')->insert($());
         
         return  'ok' ;
    }
    
    
    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlSiteF')->table('attendance')
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
