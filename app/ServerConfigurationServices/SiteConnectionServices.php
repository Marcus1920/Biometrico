<?php
namespace App\ServerConfigurationServices;
/**
 * Created by PhpStorm.
 * User: Marcus -TM
 * Date: 1/31/2018
 * Time: 21:00
 */

class SiteConnectionServices
{


    public  function  SetupDatabaseConnection ($dbName ,$SiteName  ,$SiteName_conif )
    {


        // Function  to  configure  the  Datatabase  connection


        $db_config    =  "C:/xampp/htdocs/Biometrico/config/database.php" ;
        $connection   = "'mysql$SiteName' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE$SiteName_conif', 'shakasab_$SiteName'),
             'username' => env('DB_USERNAME$SiteName_conif', 'shakasab_$SiteName'),
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
        return  "sucsefully setconncetion" ;
    }

    public   function  SetConnectionEnv  ($SiteName  ,$SiteName_conif )

    {


        $fille  = "C:/xampp/htdocs/Biometrico/.env" ;
        $space  =   "\r\n";
        $DB_CONNECTION        ="DB_CONNECTION=" ."mysql"."\n";

        $DB_HOST              ="DB_HOST =" ."127.0.0.1"."\n";
        $DB_DATABAS           = "DB_DATABAS$SiteName_conif =" ."shakasab_".$SiteName."\n";
        $DB_USERNAME          = "DB_USERNAME$SiteName_conif =" ."shakasab_".$SiteName."\n";
        $DB_PASSWORD          = "DB_PASSWORD$SiteName_conif="."Null"."\n";

        file_put_contents($fille ,$space , FILE_APPEND);
        file_put_contents($fille , $DB_CONNECTION , FILE_APPEND);
        file_put_contents($fille , $DB_HOST  , FILE_APPEND);
        file_put_contents($fille , $DB_DATABAS  , FILE_APPEND);
        file_put_contents($fille , $DB_USERNAME  , FILE_APPEND);
        file_put_contents($fille , $DB_PASSWORD  , FILE_APPEND);


    }

}