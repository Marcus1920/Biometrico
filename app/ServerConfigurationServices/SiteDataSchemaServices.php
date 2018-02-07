<?php
/**
 * Created by PhpStorm.
 * User: Marcus -TM
 * Date: 1/31/2018
 * Time: 22:43
 */

namespace App\ServerConfigurationServices;

use App\classes\xmlapi;

use mysqli;
class SiteDataSchemaServices
{

    public  function  RunScriptlocal($dbName)
        {
            \DB::statement(\DB::raw('CREATE DATABASE '.$dbName.''));

            $conn =new mysqli('localhost', 'root', '' , ''.$dbName.'');

            $query = '';
<<<<<<< HEAD
            $sqlScript = file("C:/Users/user-04/Desktop/Biome/Biometrico/public/Biometricodb.sql");
=======
            $sqlScript = file("/home/shakasabre/biometrico.shaka.cloud/public/Biometricodb.sql");
>>>>>>> 5a3623c8f59c72c81a2ee2cab3465e5bd392a9dc
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


        }


        public  function RunscriptRemote($SiteName)

        {

            $db_host = '154.0.171.123';
            $cpaneluser = 'shakasabre';
            $cpanelpass = 'Sh@k@S@bre2018';

            $databasename = 'shakasab_'.$SiteName;
            $databaseuser = 'shakasab_'.$SiteName; // Warning: in most of cases this can't be longer than 8 characters
            $databasepass = 'biometri12B'; // Warning: be sure the password is strong enough, else the CPanel will reject it

            $xmlapi = new xmlapi($db_host);


            $xmlapi->password_auth("".$cpaneluser."","".$cpanelpass."");
            $xmlapi->set_port(2083);
            $xmlapi->set_debug(1);//output actions in the error log 1 for true and 0 false
            $xmlapi->set_output('array');//set this for browser output
//create database
            $createdb = $xmlapi->api1_query($cpaneluser, "Mysql", "adddb", array($databasename));
//create user
            $usr = $xmlapi->api1_query($cpaneluser, "Mysql", "adduser", array($databaseuser, $databasepass));


            //add user
            $addusr = $xmlapi->api1_query($cpaneluser, "Mysql", "adduserdb", array("".$cpaneluser."_".$databasename."", "".$cpaneluser."_".$databaseuser."", 'all'));

            $conn =new mysqli('localhost', $cpaneluser,$cpanelpass , ''.$databasename.'');

            $query = '';
<<<<<<< HEAD
            $sqlScript = file("C:/Users/user-04/Desktop/Biome/Biometrico/public/Biometricodb.sql");
=======
            $sqlScript = file("/home/shakasabre/biometrico.shaka.cloud/public/Biometricodb.sql");
>>>>>>> 5a3623c8f59c72c81a2ee2cab3465e5bd392a9dc
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
            //    mysqli_query($conn,"GRANT ALL ON $databasename.* TO $databaseuser@$db_host")or die('erro fail to  grant  connect');

            $addusr = $xmlapi->api1_query($cpaneluser, "Mysql", "adduserdb", array("".$cpaneluser."_".$databasename."", "".$cpaneluser."_".$databaseuser."", 'all'));


            return "sufully created";




        }

}