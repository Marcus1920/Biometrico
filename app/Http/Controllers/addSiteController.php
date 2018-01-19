<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addSiteController extends Controller
{

     public  function index()
     {



         return view('addsite.addsite');

     }


     public  function  siteconfiguration  (Request $request) {
         // Variable  Declation
         $SiteName   = $request->input('SITE_NAME');
         $SiteName_conif = "_".$request->input('SITE_NAME');
         $SiteUrl = "/".$request->input('SITE_NAME');
         $site_api_ulr = strtolower($SiteUrl) ;

         // Function  to  configure  the  Datatabase  connection
         $db_config    =  "C:/xampp/htdocs/Biometrico/config/database.php" ;
         $connection   = "'mysql$SiteName' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE$SiteName_conif', 'forge'),
             'username' => env('DB_USERNAME$SiteName_conif', 'forge'),
             'password' => env('DB_PASSWORD$SiteName_conif', ''),
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
         $DB_CONNECTION        ="DB_CONNECTION=" . $request->input('DB_CONNECTION')."\n";

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

         $Create_controller = fopen($SiteName_conif.".php", "w") ;



         // add   Resource  Route
         $route  = "C:/xampp/htdocs/Biometrico/routes/web.php" ;
         $rout_api_get   =   "Route::get('$site_api_ulr', 'WorkScheduleController@index')->name('$site_api_ulr');"."\n";
         $rout_api_post   =  "Route::post('$site_api_ulr', 'WorkScheduleController@index')->name('$site_api_ulr');"."\n";
         $rout_api_delete   =  "Route::delete('$site_api_ulr', 'WorkScheduleController@index')->name('$site_api_ulr');"."\n";
         $rout_api_put   =  "Route::put('$site_api_ulr', 'WorkScheduleController@index')->name('$site_api_ulr');"."\n";

         file_put_contents($route ,$space , FILE_APPEND);
         file_put_contents($route ,$rout_api_get , FILE_APPEND);
         file_put_contents($route ,$rout_api_post , FILE_APPEND);
         file_put_contents($route ,$rout_api_delete , FILE_APPEND);
         file_put_contents($route ,$rout_api_put , FILE_APPEND);


         return   "ok";


     }

}
