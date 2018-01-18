<?php

use App\Company;
use App\Site;
use App\User;
use App\role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $allCompanies = Company::all();

    $allSites = Site::all();

    return view('auth.login', compact('allCompanies','allSites'));
});


Route::get('/registerUser','RolesController@index')
    ->name('registerUser');

Route::post('/comp','CompanyController@createCompany')
   ->name('/comp');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
   ->middleware('auth');

Route::get('/sites', 'SitesController@sites')
    ->name('sites')
->middleware('auth');





Route::get('biometricdb',function()
{
    $users=DB::connection("mysql")->table("sites")->get();
    dd($users);
});


//Route::get('biometricdb2',function()
//{
//    $data=DB::connetion("mysql")->table("attendance")->get();
//    dd($data);
//});

//Route::get('biometricdb',function()
//{
//    $users=DB::connection("mysql")->table("users")->get();
//    dd($users);
//});

//Route::get('biometricdb2',function ()
//{
//    $data=DB::connection("mysql")->table("attendance")->get();
//    dd($data);
//});



Route::get('/create', 'SitesController@create')->name('createSite');

Route::post('/store', 'SitesController@createSite')->name('saveSite');

Route::get('/createDb', 'SitesController@createDatabase')->name('createDb');

Route::group(array('prefix' => 'api/v1'), function() {

    Route::resource('/company','CompanyController');

    Route::post('/loginUser','UsersController@login');

    Route::post('/getSite','SitesController@getSite');
//    Route::get ('allCompanies' , 'CompanyController@getAllCompany');

    Route::post('create','CompanyController@createCompany');

//    Route::resource('/company','CompanyController');
    Route::get('allUsers', 'UsersControler@getallUsers');
    Route::get('siteCode', 'UsersController@getSideCode');

});

Route::get('clockinglist', 'ClockingController@index')->name('clockinglist');
Route::get('getClockingList', 'ClockingController@getClockingList')->name('getClockingList');


Route::get('workshedul', 'WorkScheduleController@index')->name('workshedul');
Route::get('getworksheduleList', 'WorkScheduleController@getworksheduleList')->name('getworksheduleList');

Route::group(array('prefix' => 'api/v1'), function() {
    Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');
});
Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');
Route::get('attendance', 'AttendecyController@index')->name('attendance');
Route::get('getattendanceList', 'AttendecyController@getattendanceList')->name('getattendanceList');