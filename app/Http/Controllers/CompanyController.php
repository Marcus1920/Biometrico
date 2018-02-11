<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Site;
use App\User;
use Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{


    public function index()
    {
        $company = Company::with('site')->get();
          return response()->json($company)  ;
    }

  
    public function CompanyList()
    {
       
        
          
          
                $comanyID = Input::get('comanyid');
                $user  = Site::where('company_id',$comanyID)->get();
                return response()->json($user);
          
    }
    
    
    
        public function SiteListDetails()
    {
       
        
          
          
                $siteID = Input::get('comanyid');
                
               
                
                
                      $user  = Site::where('site_name',$siteID)
                    
                    ->join('end_points', 'sites.site_name', '=', 'end_points.site_names')
                    ->select(
                        \DB::raw(
                            "
                        sites.site_name,
                        sites.site_code, 
                        
                        end_points.name as endpointName,
                        end_points.end_point as endpointUrl,
                        end_points.site_id as sitesID,
                        sites.created_at ,
                        sites.updated_at	 
                       
                       "
                        )
                    )
                    ->first();
                    return response()->json($user);

          
    }
    
            public function SiteListDetailsDrop()
    {
       
        
          
          
                $siteID = Input::get('comanyid');
                
               
                
                
                      $user  = Site::where('site_name',$siteID)
                    
                    ->join('end_points', 'sites.site_name', '=', 'end_points.site_names')
                    ->select(
                        \DB::raw(
                            "
                        sites.site_name,
                        sites.site_code, 
                        
                        end_points.name as endpointName,
                        end_points.end_point as endpointUrl,
                        end_points.site_id as sitesID,
                        sites.created_at ,
                        sites.updated_at	 
                       
                       "
                        )
                    )
                    ->get();
                    return response()->json($user);

          
    }


//    public function getAllCompany()
//    {
//        $companies = Company::all();
//
//        return response()->Json(['data' => $companies->toArray()], 200);
////        return response()->Json($companies);
////        return $companies;
//
//    }


}



