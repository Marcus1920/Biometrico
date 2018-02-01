<?php

namespace App\Http\Controllers;

use App\EndPoint;
use Illuminate\Http\Request;
use  App\ServerConfigurationServices\SiteConnectionServices;
use App\ServerConfigurationServices\SiteControllesServices;
use  App\ServerConfigurationServices\SiteRouteServices ;
use  App\ServerConfigurationServices\SiteDataSchemaServices;
use Illuminate\Support\Facades\Validator;
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


        $SiteName   = $request->input('SITE_NAME');
        $SiteName_conif = "_".$request->input('SITE_NAME');
        $SiteController_conifg = $request->input('SITE_NAME')."Controller";
        $SiteUrl = $request->input('SITE_NAME');
        $site_api_ulr = strtolower($SiteUrl) ;
        $dbName = ''.$SiteName.'_db';
        $company_id   = $request->input('company_id');



        $errors = Validator::make($request->all(), [
            'SITE_NAME' => 'required|max:255',
            'company_id' => 'required|max:255',
        ]);

        if ($errors->fails())
        {
            return redirect()->back()->withErrors($errors->errors());
        }


        // Function  to  configure  the  Datatabase  connection


          $new_site_connection = new SiteConnectionServices() ;
          $new_site_connection->SetupDatabaseConnection($dbName ,$SiteName  ,$SiteName_conif) ;
          $new_site_connection->SetConnectionEnv($SiteName ,$SiteName_conif) ;

          $new_site_Controller  = new  SiteControllesServices() ;

          $new_site_Controller ->SetupControllers($SiteController_conifg  , $SiteName) ;
          $new_site_Routes    = new  SiteRouteServices() ;

          $new_site_Routes ->setupRoutes($site_api_ulr ,$SiteController_conifg )  ;
          $new_site_Routes ->SaveEndpoint($SiteName  ,$company_id, $site_api_ulr) ;

          $new_site_Schema   = new  SiteDataSchemaServices () ;

        //  $new_site_Schema->RunScriptlocal($dbName) ;

          $new_site_Schema->RunscriptRemote($SiteName);







        return redirect('/sites');




    }

}