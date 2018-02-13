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

        return response()->json($company);
    }


    public function create()
    {
        return view('Company.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
        ]);

        $file = $request->file('image');
        // image upload in public/upload folder.

        $destinationFolder = "uploads";

        if(!\File::exists($destinationFolder)) {
            \File::makeDirectory($destinationFolder,0777,true);
        }

        $name =    $file->getClientOriginalName();

        $file->move($destinationFolder,$name) ;

        $newCompany = new Company();
        $newCompany->logo = env('APP_URL').$destinationFolder.'/'.$name;
        $newCompany->name = $request['name'];
        $newCompany->color = env('APP_URL').$request->background;
        $newCompany->save();

        return redirect('/companyList');
    }

    public function edit($id)
    {
        $company = Company::where('id',$id)->first();
//        return $company->name;
        return view('Company.edit',compact('company'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
        ]);

        $file = $request->file('image');
        // image upload in public/upload folder.

        if($file !=NULL)
        {
            $destinationFolder = "uploads";

            if(!\File::exists($destinationFolder)) {
                \File::makeDirectory($destinationFolder,0777,true);
            }

            $name =    $file->getClientOriginalName();

            $file->move($destinationFolder,$name) ;

            Company::where('id',$request['id'])
                ->update(['logo'=>env('APP_URL').$destinationFolder.'/'.$name]);
        }
        if($request->background != NULL)
        {
            Company::where('id',$request['id'])
                ->update(['color'=>env('APP_URL').$request->background]);
        }

        Company::where('id',$request['id'])
            ->update(['name'=>$request['name']]);

        return redirect('/companyList');
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

    public function getCompanyList()
    {
        $companies = Company::all();

        return response()->json($companies);
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



