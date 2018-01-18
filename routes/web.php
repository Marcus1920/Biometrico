<?php


use App\Company;
use App\Site;

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

    return view('auth.login', compact('allCompanies'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sites', 'SitesController@sites')->name('sites');

Route::get('/create', 'SitesController@create')->name('createSite');

Route::post('/store', 'SitesController@createSite')->name('saveSite');

Route::get('/createDb', 'SitesController@createDatabase')->name('createDb');

Route::group(array('prefix' => 'api/v1'), function() {

    Route::resource('/company','CompanyController');

    Route::post('/loginUser','UsersController@login');

});