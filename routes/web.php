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

Route::get('commad'   ,  function (){

    \Artisan::call('make:controller\n  commandccontrolller');

}) ;

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

Route::get('/registerUser', 'UsersController@registerUser')->name('register');

Route::post('/storeUser', 'UsersController@create')->name('register');


Route::get('clockinglist', 'ClockingController@index')->name('clockinglist');
Route::get('getClockingList', 'ClockingController@getClockingList')->name('getClockingList');
Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');
Route::get('attendance', 'AttendecyController@index')->name('attendance');
Route::get('getattendanceList', 'AttendecyController@getattendanceList')->name('getattendanceList');

Route::get('workshedul', 'WorkScheduleController@index')->name('workshedul');
Route::get('getworksheduleList', 'WorkScheduleController@getworksheduleList')->name('getworksheduleList');
Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');



Route::group(array('prefix' => 'api/v1'), function() {

    Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');
    Route::resource('/company','CompanyController');

    Route::post('/loginUser','UsersController@login');

    Route::post('/getSite','SitesController@getSite');

});



Route::get('addsite', 'addSiteController@index')->name('addsite');

Route::post('siteconfiguration', 'addSiteController@siteconfiguration')->name('siteconfiguration');









Route::get('/zipho', 'ziphoController@index')->name('/zipho');
Route::post('/zipho', 'ziphoController@index')->name('/zipho');
Route::delete('/zipho', 'ziphoController@index')->name('/zipho');
Route::put('/zipho', 'ziphoController@index')->name('/zipho');


Route::get('/laboratory', 'laboratoryController@index')->name('/laboratory');
Route::post('/laboratory', 'laboratoryController@index')->name('/laboratory');
Route::delete('/laboratory', 'laboratoryController@index')->name('/laboratory');
Route::put('/laboratory', 'laboratoryController@index')->name('/laboratory');

Route::get('/zipho2', 'zipho2Controller@index')->name('/zipho2');
Route::post('/zipho2', 'zipho2Controller@index')->name('/zipho2');
Route::delete('/zipho2', 'zipho2Controller@index')->name('/zipho2');
Route::put('/zipho2', 'zipho2Controller@index')->name('/zipho2');

Route::get('/zipho2', 'zipho2Controller@index')->name('/zipho2');
Route::post('/zipho2', 'zipho2Controller@index')->name('/zipho2');
Route::delete('/zipho2', 'zipho2Controller@index')->name('/zipho2');
Route::put('/zipho2', 'zipho2Controller@index')->name('/zipho2');

Route::get('/marcoss', 'marcossController@index')->name('/marcoss');
Route::post('/marcoss', 'marcossController@index')->name('/marcoss');
Route::delete('/marcoss', 'marcossController@index')->name('/marcoss');
Route::put('/marcoss', 'marcossController@index')->name('/marcoss');


Route::group(array('prefix' => 'api/v1'), function() {
Route::get('/tetrews', 'tetrewsController@index')->name('/tetrews');
Route::post('/tetrews', 'tetrewsController@index')->name('/tetrews');
Route::delete('/tetrews', 'tetrewsController@index')->name('/tetrews');
Route::put('/tetrews', 'tetrewsController@index')->name('/tetrews');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/tetrews', 'tetrewsController@index')->name('/tetrews');
Route::post('/tetrews', 'tetrewsController@index')->name('/tetrews');
Route::delete('/tetrews', 'tetrewsController@index')->name('/tetrews');
Route::put('/tetrews', 'tetrewsController@index')->name('/tetrews');

         });
