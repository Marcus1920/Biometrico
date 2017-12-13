<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Auth;

class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sites()
    {
        $user = User::find(Auth::user()->id);

        $company = Company::find($user->company_id);

        $sites = Site::with('company')->where('company_id',$user->company_id)->get();

//        $sites=\DB::table('sites')
//            ->join('companies','sites.company_id','=','companies.id')
//            ->select(
//                \DB::raw(
//                    "
//                        sites.id,
//                        sites.site_name,
//                        companies.name,
//                        sites.created_at
//                        "
//                )
//            )
//            ->orderBy('created_at' ,'desc')	->get();

//        return $sites;

        return view('auth.sites',compact('sites','company'));
    }
}
