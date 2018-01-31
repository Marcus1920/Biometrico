<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteGController extends Controller
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
Content-Length:            63
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IjFueDlaZEw2ZkJjOVFOZmRVTHRDV0E9PSIsInZhbHVlIjoiVmswb0hVZkVGZEh0Zmk2RWtURFhGeFY0OUJnV21Fd2tPbTU1alhzbDlrRVwvb3F6VzZhNzNOaStibEdJMFl1QnQ0M05OUFhpWm1xbUNVSHNiWVordDRRPT0iLCJtYWMiOiJlZjAzYjliZThkMDhkZWYzMjgzZTM4ZTc5YmZhNDAzZWU2NmEyMjM0MGZhNzkzZWZhNWY1Yzk4YzcyYmNkYzcxIn0%3D; laravel_session=eyJpdiI6IjFlNk03WjVEQko5MkJ5UldLRExFUFE9PSIsInZhbHVlIjoibzlTUFVpeEhrTk9SUTRBNDZNXC9hUGpmd1ZIZ3Rjamp1SHVNazhOanlRUDRzSWRVVm5wTllWV1JwaGtBdzQydFFyXC9wdWpob2U3VEJcL0FNK0pmSUcrK1E9PSIsIm1hYyI6IjIxNWY3NTg1MDQyZTEyMGYzZTNkYWNkYTkyOWI2MzgxOTI4MTRmYzhkMzlkZmRiYjhiNzM4ZWJmYmU4YjhmZWQifQ%3D%3D
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&SITE_NAME=siteG')
    {
      \DB::connection('mysqlsiteG')->table('attendance')->insert('$()');
         
         return  'ok' ;
    }
    
    
    public function workshedulstore(Request  '$POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            63
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IjFueDlaZEw2ZkJjOVFOZmRVTHRDV0E9PSIsInZhbHVlIjoiVmswb0hVZkVGZEh0Zmk2RWtURFhGeFY0OUJnV21Fd2tPbTU1alhzbDlrRVwvb3F6VzZhNzNOaStibEdJMFl1QnQ0M05OUFhpWm1xbUNVSHNiWVordDRRPT0iLCJtYWMiOiJlZjAzYjliZThkMDhkZWYzMjgzZTM4ZTc5YmZhNDAzZWU2NmEyMjM0MGZhNzkzZWZhNWY1Yzk4YzcyYmNkYzcxIn0%3D; laravel_session=eyJpdiI6IjFlNk03WjVEQko5MkJ5UldLRExFUFE9PSIsInZhbHVlIjoibzlTUFVpeEhrTk9SUTRBNDZNXC9hUGpmd1ZIZ3Rjamp1SHVNazhOanlRUDRzSWRVVm5wTllWV1JwaGtBdzQydFFyXC9wdWpob2U3VEJcL0FNK0pmSUcrK1E9PSIsIm1hYyI6IjIxNWY3NTg1MDQyZTEyMGYzZTNkYWNkYTkyOWI2MzgxOTI4MTRmYzhkMzlkZmRiYjhiNzM4ZWJmYmU4YjhmZWQifQ%3D%3D
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&SITE_NAME=siteG')
    {
      \DB::connection('mysqlsiteG')->table('work_schedule')->insert('$()');
         
         return  'ok' ;
    }
    
    public function clockingliststore(Request  $POST /Biometrico/public/siteconfiguration HTTP/1.1
Accept:                    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Accept-Encoding:           gzip, deflate, br
Accept-Language:           en-US,en;q=0.9
Cache-Control:             max-age=0
Connection:                keep-alive
Content-Length:            63
Content-Type:              application/x-www-form-urlencoded
Cookie:                    XSRF-TOKEN=eyJpdiI6IjFueDlaZEw2ZkJjOVFOZmRVTHRDV0E9PSIsInZhbHVlIjoiVmswb0hVZkVGZEh0Zmk2RWtURFhGeFY0OUJnV21Fd2tPbTU1alhzbDlrRVwvb3F6VzZhNzNOaStibEdJMFl1QnQ0M05OUFhpWm1xbUNVSHNiWVordDRRPT0iLCJtYWMiOiJlZjAzYjliZThkMDhkZWYzMjgzZTM4ZTc5YmZhNDAzZWU2NmEyMjM0MGZhNzkzZWZhNWY1Yzk4YzcyYmNkYzcxIn0%3D; laravel_session=eyJpdiI6IjFlNk03WjVEQko5MkJ5UldLRExFUFE9PSIsInZhbHVlIjoibzlTUFVpeEhrTk9SUTRBNDZNXC9hUGpmd1ZIZ3Rjamp1SHVNazhOanlRUDRzSWRVVm5wTllWV1JwaGtBdzQydFFyXC9wdWpob2U3VEJcL0FNK0pmSUcrK1E9PSIsIm1hYyI6IjIxNWY3NTg1MDQyZTEyMGYzZTNkYWNkYTkyOWI2MzgxOTI4MTRmYzhkMzlkZmRiYjhiNzM4ZWJmYmU4YjhmZWQifQ%3D%3D
Host:                      localhost
Origin:                    http://localhost
Referer:                   http://localhost/Biometrico/public/addsite
Upgrade-Insecure-Requests: 1
User-Agent:                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36

_token=qXftPOxDgkaWOrTDLIpBvn7Z7oU614lbXexcuWdy&SITE_NAME=siteG)
    {
      \DB::connection('mysqlsiteG')->table('clocking_temp_print')->insert('$()');
         
         return  'ok' ;
    }
    
    
    
     public  function  index ()
    {

        $shedule= \DB::connection('mysqlsiteG')->table('attendance')
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
