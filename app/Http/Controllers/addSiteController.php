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
         $key   = "12121" ;
         $db_config    =  "C:/xampp/htdocs/Biometrico/config/database.php" ;
         $connection   = "'mysql' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE', 'forge'),
             'username' => env('DB_USERNAME', 'forge'),
             'password' => env('DB_PASSWORD', ''),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
";

         $fp_source = fopen($db_config, 'r');
         $fp_dest = fopen('database_temp.php', 'w'); // better to generate a real temp filename
         fwrite($fp_dest, $connection);
         while (!feof($fp_source)) {
             $connection .= fread($fp_source, 301926);
             fwrite($fp_dest, $connection);
         }
         fclose($fp_source);
         fclose($fp_dest);
         unlink($db_config);
         rename('database_temp.php',$db_config);

//$fp = fopen('C:/xampp/htdocs/Biometrico/config/database.php', 'a');//opens file in append mode
//fwrite($fp, $connection);
//fclose($fp);
//
//
//        file_put_contents($db_config ,$connection , FILE_APPEND);

         // function   to   write  on  the Eviromental  File
         $fille  = "C:/xampp/htdocs/Biometrico/.env" ;
         $space  =   "\r\n";
         $DB_CONNECTION        ="DB_CONNECTION =" . $request->input('DB_CONNECTION')."\n";

         $DB_HOST              ="DB_HOST =" . $request->input('DB_HOST')."\n";
         $DB_DATABAS           = "DB_DATABAS =" .$request->input('DB_DATABASE')."\n";
         $DB_USERNAME          = "DB_USERNAME =" .$request->input('DB_USERNAME')."\n";
         $DB_PASSWORD          = "DB_PASSWORD =" .$request->input('DB_PASSWORD')."\n";

         file_put_contents($fille ,$space , FILE_APPEND);
         file_put_contents($fille , $DB_CONNECTION , FILE_APPEND);
         file_put_contents($fille , $DB_HOST  , FILE_APPEND);
         file_put_contents($fille , $DB_DATABAS  , FILE_APPEND);
         file_put_contents($fille , $DB_USERNAME  , FILE_APPEND);
         file_put_contents($fille , $DB_PASSWORD  , FILE_APPEND);

//         $route  = "C:/xampp/htdocs/Biometrico/routes/web.php" ;
//         $rout_api_get   =   "Route::get('biometrico', 'WorkScheduleController@index')->name('biometrico');"."\n";
//         $rout_api_post   =  "Route::post('biometrico', 'WorkScheduleController@index')->name('biometrico');"."\n";
//         $rout_api_delete   =  "Route::delete('biometrico', 'WorkScheduleController@index')->name('biometrico');"."\n";
//         $rout_api_put   =  "Route::put('biometrico', 'WorkScheduleController@index')->name('biometrico');"."\n";
//
//
//         file_put_contents($route ,$rout_api_get , FILE_APPEND);
//         file_put_contents($route ,$rout_api_post , FILE_APPEND);
//         file_put_contents($route ,$rout_api_delete , FILE_APPEND);
//         file_put_contents($route ,$rout_api_put , FILE_APPEND);

         return   "ok";


     }

}
