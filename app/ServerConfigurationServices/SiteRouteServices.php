<?php
/**
 * Created by PhpStorm.
 * User: Marcus -TM
 * Date: 1/31/2018
 * Time: 22:11
 */

namespace App\ServerConfigurationServices;
use App\EndPoint;
use App\User;
use App\Site;
use App\role;

class SiteRouteServices
{

     public  function  setupRoutes ($site_api_ulr ,$SiteController_conifg )

     {

         $space  =   "\r\n";


         $route  = "C:/Users/user-04/Desktop/Biome/Biometrico/routes/web.php" ;

         $routes  ="Route::group(array('prefix' => 'api/v1'), function() {"."\n"."\n".


             "Route::post('attendency$site_api_ulr', '$SiteController_conifg@attendencystore')->name('attendency$site_api_ulr');"."\n".
             "Route::post('clockinglist$site_api_ulr', '$SiteController_conifg@clockingliststore')->name('clockinglist$site_api_ulr');"."\n".
             "Route::post('workshedul$site_api_ulr', '$SiteController_conifg@workshedulstore')->name('workshedul$site_api_ulr');
         });
";

         file_put_contents($route ,$space , FILE_APPEND);
         file_put_contents($route ,$routes , FILE_APPEND);


         return "route  sucfully created" ;

     }

      public  function  SaveEndpoint($SiteName  ,$company_id, $site_api_ulr )

      {


          $newSite = New Site();
          $newSite->company_id =$company_id;
          $newSite->site_name = $SiteName;

          $dbName = ''.$SiteName.'_db';

          $newSite->db_name = strtolower($dbName);
          $newSite->site_code = '001'.$SiteName;
          $newSite->	connection_name = "mysql".$SiteName;
//        $newSite->end_point =   $_ENV['APP_URL']."api/v1".$site_api_ulr ;


//          $newSite->save();
//
//          $newEndpoint = new EndPoint();
//          $newEndpoint->site_id = $newSite->id;
//          $newEndpoint->name = "attendency$site_api_ulr";
//          $newEndpoint->end_point = $_ENV['APP_URL']."api/v1/attendency".$site_api_ulr;
//          $newEndpoint->save();
//
//          $newEndpoint = new EndPoint();
//          $newEndpoint->site_id = $newSite->id;
//          $newEndpoint->name = "clockinglist$site_api_ulr";
//          $newEndpoint->end_point = $_ENV['APP_URL']."api/v1/clockinglist".$site_api_ulr;
//          $newEndpoint->save();
//
//          $newEndpoint = new EndPoint();
//          $newEndpoint->site_id = $newSite->id;
//          $newEndpoint->name = "workshedul$site_api_ulr";
//          $newEndpoint->end_point = $_ENV['APP_URL']."api/v1/workshedul".$site_api_ulr;
//          $newEndpoint->save();

          return "End point  save" ;

      }





}