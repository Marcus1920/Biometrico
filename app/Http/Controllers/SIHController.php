<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SIHController extends Controller
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
    public function attendencystore(Request  '$POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            74
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IlVwblQ3bHVRaHEwK21lbUVSOTR5akE9PSIsInZhbHVlIjoibkRGZlk0VGVydUxxUW4yZGhmMVdIaHhWeUtDZVRaYlBHdnMyNklpVUI0V3p1dU5iXC9EY0VSbnVIZ2JKbHhidTB1eHFDZm0zVElVcTJ1NURrNGREMGRRPT0iLCJtYWMiOiI5NDc1MDk4NDQxZDkxMGZjMjg5MTVjYmNmN2YxYmNjNTFjMmQ2ZDZiYjMzYWQzODk4MGQyMGMyZmVkNzZhMTQ4In0%3D; laravel_session=eyJpdiI6Ikhra05xdWpKR3FnQ0Jpc2VcL1UrNGdnPT0iLCJ2YWx1ZSI6InFOWmhVRXQ4dFE5ck8wQlF3RFlLcFpRcmp6N01ueVo2WVMzME1Eb3NpaEdkWW01QWthXC9temh2Y3RvK3g5czhJS25XYjBSUUpocWwzaVozNnM2aGFOQT09IiwibWFjIjoiYzBkZmUzZjY5OGZiMTZiNzQ1ODBlYmU0ODE3OWU5ZmNjOGM0OTU3ZTY4MTU2NmRiNzJlYTU3NmRhNjYxNzZhYSJ9
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&company_id=1&SITE_NAME=SIH')
    {
      \DB::connection('mysqlSIH')->table('attendance')->insert('$()');
         
         return  'ok' ;
    }
    
    
    public function workshedulstore(Request  '$POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            74
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IlVwblQ3bHVRaHEwK21lbUVSOTR5akE9PSIsInZhbHVlIjoibkRGZlk0VGVydUxxUW4yZGhmMVdIaHhWeUtDZVRaYlBHdnMyNklpVUI0V3p1dU5iXC9EY0VSbnVIZ2JKbHhidTB1eHFDZm0zVElVcTJ1NURrNGREMGRRPT0iLCJtYWMiOiI5NDc1MDk4NDQxZDkxMGZjMjg5MTVjYmNmN2YxYmNjNTFjMmQ2ZDZiYjMzYWQzODk4MGQyMGMyZmVkNzZhMTQ4In0%3D; laravel_session=eyJpdiI6Ikhra05xdWpKR3FnQ0Jpc2VcL1UrNGdnPT0iLCJ2YWx1ZSI6InFOWmhVRXQ4dFE5ck8wQlF3RFlLcFpRcmp6N01ueVo2WVMzME1Eb3NpaEdkWW01QWthXC9temh2Y3RvK3g5czhJS25XYjBSUUpocWwzaVozNnM2aGFOQT09IiwibWFjIjoiYzBkZmUzZjY5OGZiMTZiNzQ1ODBlYmU0ODE3OWU5ZmNjOGM0OTU3ZTY4MTU2NmRiNzJlYTU3NmRhNjYxNzZhYSJ9
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&company_id=1&SITE_NAME=SIH')
    {
      \DB::connection('mysqlSIH')->table('work_schedule')->insert('$()');
         
         return  'ok' ;
    }
    
    public function clockingliststore(Request  $POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            74
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IlVwblQ3bHVRaHEwK21lbUVSOTR5akE9PSIsInZhbHVlIjoibkRGZlk0VGVydUxxUW4yZGhmMVdIaHhWeUtDZVRaYlBHdnMyNklpVUI0V3p1dU5iXC9EY0VSbnVIZ2JKbHhidTB1eHFDZm0zVElVcTJ1NURrNGREMGRRPT0iLCJtYWMiOiI5NDc1MDk4NDQxZDkxMGZjMjg5MTVjYmNmN2YxYmNjNTFjMmQ2ZDZiYjMzYWQzODk4MGQyMGMyZmVkNzZhMTQ4In0%3D; laravel_session=eyJpdiI6Ikhra05xdWpKR3FnQ0Jpc2VcL1UrNGdnPT0iLCJ2YWx1ZSI6InFOWmhVRXQ4dFE5ck8wQlF3RFlLcFpRcmp6N01ueVo2WVMzME1Eb3NpaEdkWW01QWthXC9temh2Y3RvK3g5czhJS25XYjBSUUpocWwzaVozNnM2aGFOQT09IiwibWFjIjoiYzBkZmUzZjY5OGZiMTZiNzQ1ODBlYmU0ODE3OWU5ZmNjOGM0OTU3ZTY4MTU2NmRiNzJlYTU3NmRhNjYxNzZhYSJ9
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&company_id=1&SITE_NAME=SIH)
    {
      \DB::connection('mysqlSIH')->table('clocking_temp_print')->insert('$()');
         
         return  'ok' ;
    }
    
    
    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlSIH')->table('attendance')
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
