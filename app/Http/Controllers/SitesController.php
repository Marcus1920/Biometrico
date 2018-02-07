<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use mysqli;

class SitesController extends Controller
{

    public function index()
    {
        $sites = Site::with('endpoint')->with('company')->get();

        return response()->json($sites);
    }

    public function sites()
    {
        $user = User::find(Auth::user()->id);

        $company = Company::find($user->company_id);

        $sites = Site::with('company')->where('company_id',$user->company_id)->get();

        return view('auth.sites',compact('sites','company'));





    }


    public  function  getsitelist() {

        $Site_tabs=Site::where('company_id',1)
            ->join('companies', 'sites.company_id', '=', 'companies.id')
            ->select(
                \DB::raw(
                    "
                        sites.id,
                        sites.company_id ,
                        sites.site_name,
                        sites.db_name,
                        sites.site_code
                       
    
                 
                        
                        "
                )
            )
            ->get();

        return response()->json($Site_tabs);


    }

    public function getSite(Request $request)
    {
        $site = Site::where('site_code',$request['site_code'])->get();

        return response()->json($site);
    }

    public function selectSite($id)
    {
        $site = Site::where('id',$id)->first();


        try {


            $shedule= \DB::connection($site->connection_name)->table('clocking_temp_print')
                ->select(
                    \DB::raw(
                        "
                                clocking_temp_print.CLOCK_DATE  ,             
                                clocking_temp_print.CLOCK_DAY  ,                       
                                clocking_temp_print.TIME_IN_1  ,
                                clocking_temp_print.TIME_IN_2  ,
                                clocking_temp_print.TIME_OUT_2  ,
                                clocking_temp_print.TIME_IN_3  ,
                                clocking_temp_print.TIME_OUT_3  ,
                                clocking_temp_print.TIME_IN_4  ,
                                clocking_temp_print.TIME_OUT_4,
                                clocking_temp_print.TIME_IN_5    
                                "
                    )
                )
                ->get();

            return view('home',compact('shedule','site'));


        } catch (\Exception $e) {

            return redirect('/404')->with('nick', $id);
        }


    }

    public function create()
    {
        return view('Site.create');
    }

    public function createSite(Request $request)
    {
        $newSite = New Site();
        $newSite->company_id = $request['company_id'];
        $newSite->site_name = $request['site_name'];

        $dbName = ''.$request['site_name'].'_db';

        $newSite->db_name = $dbName;

        DB::statement(DB::raw('CREATE DATABASE '.$dbName.''));

        $conn =new mysqli('localhost', 'root', '' , ''.$dbName.'');

        $query = '';

        $sqlScript = file('C:\Users\Siyaleader-04\Desktop\biometricdb.sql');
        foreach ($sqlScript as $line) {

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