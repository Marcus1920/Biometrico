<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Auth;
use DB;
use mysqli;

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

        return view('auth.sites',compact('sites','company'));
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
        $sqlScript = file('C:\Users\Siyaleader-0.1\Desktop\Biometric\Biometrico\public\Biometricodb.sql');
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

        $newSite->save();

        return "successfuly created a site";

    }

    public function createDatabase()
    {

        $dbName = 'marcus_db';

//        $newSite->db_name = $dbName;

        DB::statement(DB::raw('CREATE DATABASE '.$dbName.''));

        $conn =new mysqli('localhost', 'root', '' , ''.$dbName.'');

        $query = '';
        $sqlScript = file('C:\Users\Siyaleader-0.1\Desktop\Biometric\Biometrico\public\Biometricodb.sql');
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

//        $dbName = 'zzzzz';
//        DB::statement(DB::raw('CREATE DATABASE '.$dbName.''));

        return "database created";
    }
}
