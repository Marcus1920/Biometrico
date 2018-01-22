<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Site;
use App\role;
use App\Company;
use mysqli;
class addSiteController extends Controller
{

     public  function index()
     {

         $companies=Company::all();
         $selectedCompany=User::first()->company_id;


         return view('addsite.addsite',compact('companies','selectedCompany'));

     }


     public  function  siteconfiguration  (Request $request) {
         // Variable  Declation
         $shedule  = "shedule" ;

         $SiteName   = $request->input('SITE_NAME');
         $SiteName_conif = "_".$request->input('SITE_NAME');
         $SiteController_conifg = $request->input('SITE_NAME')."Controller";
         $SiteUrl = "/".$request->input('SITE_NAME');
         $site_api_ulr = strtolower($SiteUrl) ;

         // Function  to  configure  the  Datatabase  connection
         $db_config    =  "C:/xampp/htdocs/Biometrico/config/database.php" ;
         $connection   = "'mysql$SiteName' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE$SiteName_conif', '$SiteName_conif'),
             'username' => env('DB_USERNAME$SiteName_conif', 'root'),
             'password' => env('DB_PASSWORD$SiteName_conif', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],";

         $replacement = $connection;
         $specific_line = 49; // sample value squeeze it on this line
         $contents = file($db_config, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
         if($specific_line > sizeof($contents)) {
             $specific_line = sizeof($contents) + 1;
         }
         array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
         $contents = implode("\n", $contents);
         file_put_contents($db_config, $contents);

         // End  Function


         // Function   to   write  on  the Eviromental  File
         $fille  = "C:/xampp/htdocs/Biometrico/.env" ;
         $space  =   "\r\n";
         $DB_CONNECTION        ="DB_CONNECTION=" ."mysql"."\n";

         $DB_HOST              ="DB_HOST =" . $request->input('DB_HOST')."\n";
         $DB_DATABAS           = "DB_DATABAS$SiteName_conif =" .$request->input('DB_DATABASE')."\n";
         $DB_USERNAME          = "DB_USERNAME$SiteName_conif =" .$request->input('DB_USERNAME')."\n";
         $DB_PASSWORD          = "DB_PASSWORD$SiteName_conif=" .$request->input('DB_PASSWORD')."\n";

         file_put_contents($fille ,$space , FILE_APPEND);
         file_put_contents($fille , $DB_CONNECTION , FILE_APPEND);
         file_put_contents($fille , $DB_HOST  , FILE_APPEND);
         file_put_contents($fille , $DB_DATABAS  , FILE_APPEND);
         file_put_contents($fille , $DB_USERNAME  , FILE_APPEND);
         file_put_contents($fille , $DB_PASSWORD  , FILE_APPEND);

         //End  Function

         // Function  to  create  a  Controller
         $fn = "C:/xampp/htdocs/Biometrico/app/Http/Controllers/AttendecyController.php";

         $Create_controller = fopen("C:/xampp/htdocs/Biometrico/app/Http/Controllers/".$SiteController_conifg.".php", "w") ;
         $methode  = "<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function getattendanceList()
    {
        return view('home');
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

         // add   Resource  Route
         $route  = "C:/xampp/htdocs/Biometrico/routes/web.php" ;



           $routes  ="Route::group(array('prefix' => 'api/v1'), function() {"."\n"."\n".

             "Route::get('$site_api_ulr', '$SiteController_conifg@index')->name('$site_api_ulr');"."\n".
             "Route::post('$site_api_ulr', '$SiteController_conifg@index')->name('$site_api_ulr');"."\n".
             "Route::delete('$site_api_ulr', '$SiteController_conifg@index')->name('$site_api_ulr');"."\n".
             "Route::put('$site_api_ulr', '$SiteController_conifg@index')->name('$site_api_ulr');

         });
";

         file_put_contents($route ,$space , FILE_APPEND);
         file_put_contents($route ,$routes , FILE_APPEND);


         // Function  to  save  to  Database


         $newSite = New Site();
         $newSite->company_id = $request['company_id'];
         $newSite->site_name = $SiteName;

         $dbName = ''.$SiteName.'_db';

         $newSite->db_name = $dbName;
         $newSite->site_code = '001'.$SiteName;
         $newSite->end_point =   $_ENV['APP_URL']."api/v1".$site_api_ulr ;


         \DB::statement(\DB::raw('CREATE DATABASE '.$dbName.''));

         $conn =new mysqli('localhost', 'root', '' , ''.$dbName.'');

         $query = '';
         $sqlScript = file("C:/xampp/htdocs/Biometrico/public/Biometricodb.sql");
         foreach ($sqlScript as $line)	{

             $startWith = substr(trim($line), 0 ,2);
             $endWith = substr(trim($line), -1 ,1);

             if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                 continue;
             }

             $query = $query . $line;
             if ($endWith == ';') {
                 mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
                 $query= '';
             }
         }

         $newSite->save();

         return "successfuly created a site";




     }

}
