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
Route::get('/getsitelist', 'SitesController@getsitelist')->name('getsitelist');

Route::get('/create', 'SitesController@create')->name('createSite');

Route::post('/store', 'SitesController@createSite')->name('saveSite');

Route::get('/createDb', 'SitesController@createDatabase')->name('createDb');

Route::get('/registerUser', 'UsersController@registerUser')->name('register');

Route::post('/storeUser', 'UsersController@create')->name('register');


Route::get('clockinglist', 'ClockingController@index')->name('clockinglist');
Route::get('getClockingList', 'ClockingController@getClockingList')->name('getClockingList');
Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');
Route::get('attendance/{id}', 'AttendecyController@index')->name('attendance');
Route::get('getattendanceList', 'AttendecyController@getattendanceList')->name('getattendanceList');

Route::get('workshedul/{id}', 'WorkScheduleController@index')->name('workshedul');
Route::get('getworksheduleList', 'WorkScheduleController@getworksheduleList')->name('getworksheduleList');
Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');



Route::group(array('prefix' => 'api/v1'), function() {

    Route::post('attendstoreance', 'AttendecyController@store')->name('attendstoreance');
    Route::resource('/company','CompanyController');

    Route::post('/loginUser','UsersController@login');

    Route::post('/getSite','SitesController@getSite');

});

Route::get('/selectSite/{id}', 'SitesController@selectSite');

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

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::post('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::delete('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::put('/cataloge', 'catalogeController@index')->name('/cataloge');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::post('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::delete('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::put('/cataloge', 'catalogeController@index')->name('/cataloge');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::post('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::delete('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::put('/cataloge', 'catalogeController@index')->name('/cataloge');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::post('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::delete('/cataloge', 'catalogeController@index')->name('/cataloge');
    Route::put('/cataloge', 'catalogeController@index')->name('/cataloge');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::post('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::delete('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::put('/barakat10', 'Barakat10Controller@index')->name('/barakat10');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::post('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::delete('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::put('/barakat10', 'Barakat10Controller@index')->name('/barakat10');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::post('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::delete('/barakat10', 'Barakat10Controller@index')->name('/barakat10');
    Route::put('/barakat10', 'Barakat10Controller@index')->name('/barakat10');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/barakate1025', 'barakate1025Controller@index')->name('/barakate1025');
    Route::post('/barakate1025', 'barakate1025Controller@index')->name('/barakate1025');
    Route::delete('/barakate1025', 'barakate1025Controller@index')->name('/barakate1025');
    Route::put('/barakate1025', 'barakate1025Controller@index')->name('/barakate1025');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/kololo', 'KololoController@index')->name('/kololo');
    Route::post('/kololo', 'KololoController@index')->name('/kololo');
    Route::delete('/kololo', 'KololoController@index')->name('/kololo');
    Route::put('/kololo', 'KololoController@index')->name('/kololo');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/kololo2013', 'Kololo2013Controller@index')->name('/kololo2013');
    Route::post('/kololo2013', 'Kololo2013Controller@index')->name('/kololo2013');
    Route::delete('/kololo2013', 'Kololo2013Controller@index')->name('/kololo2013');
    Route::put('/kololo2013', 'Kololo2013Controller@index')->name('/kololo2013');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/kololo2013000000', 'Kololo2013000000Controller@index')->name('/kololo2013000000');
    Route::post('/kololo2013000000', 'Kololo2013000000Controller@index')->name('/kololo2013000000');
    Route::delete('/kololo2013000000', 'Kololo2013000000Controller@index')->name('/kololo2013000000');
    Route::put('/kololo2013000000', 'Kololo2013000000Controller@index')->name('/kololo2013000000');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/garagisteslobo', 'garagistesLOboController@index')->name('/garagisteslobo');
    Route::post('/garagisteslobo', 'garagistesLOboController@index')->name('/garagisteslobo');
    Route::delete('/garagisteslobo', 'garagistesLOboController@index')->name('/garagisteslobo');
    Route::put('/garagisteslobo', 'garagistesLOboController@index')->name('/garagisteslobo');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');
    Route::post('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');
    Route::delete('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');
    Route::put('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');
    Route::post('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');
    Route::delete('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');
    Route::put('/bonjoure claseses', 'Bonjoure clasesesController@index')->name('/bonjoure claseses');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zetusbor', 'ZETUSBORController@index')->name('/zetusbor');
    Route::post('/zetusbor', 'ZETUSBORController@index')->name('/zetusbor');
    Route::delete('/zetusbor', 'ZETUSBORController@index')->name('/zetusbor');
    Route::put('/zetusbor', 'ZETUSBORController@index')->name('/zetusbor');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zetusbor2018', 'ZETUSBOR2018Controller@index')->name('/zetusbor2018');
    Route::post('/zetusbor2018', 'ZETUSBOR2018Controller@index')->name('/zetusbor2018');
    Route::delete('/zetusbor2018', 'ZETUSBOR2018Controller@index')->name('/zetusbor2018');
    Route::put('/zetusbor2018', 'ZETUSBOR2018Controller@index')->name('/zetusbor2018');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zetusbor20120', 'ZETUSBOR20120Controller@index')->name('/zetusbor20120');
    Route::post('/zetusbor20120', 'ZETUSBOR20120Controller@index')->name('/zetusbor20120');
    Route::delete('/zetusbor20120', 'ZETUSBOR20120Controller@index')->name('/zetusbor20120');
    Route::put('/zetusbor20120', 'ZETUSBOR20120Controller@index')->name('/zetusbor20120');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');
    Route::post('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');
    Route::delete('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');
    Route::put('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');
    Route::post('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');
    Route::delete('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');
    Route::put('/zetusbor201222', 'ZETUSBOR201222Controller@index')->name('/zetusbor201222');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/', 'Controller@index')->name('/');
    Route::post('/', 'Controller@index')->name('/');
    Route::delete('/', 'Controller@index')->name('/');
    Route::put('/', 'Controller@index')->name('/');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zipokoto', 'ZipoKotoController@index')->name('/zipokoto');
    Route::post('/zipokoto', 'ZipoKotoController@index')->name('/zipokoto');
    Route::delete('/zipokoto', 'ZipoKotoController@index')->name('/zipokoto');
    Route::put('/zipokoto', 'ZipoKotoController@index')->name('/zipokoto');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/zipokoto2018', 'ZipoKoto2018Controller@index')->name('/zipokoto2018');
    Route::post('/zipokoto2018', 'ZipoKoto2018Controller@index')->name('/zipokoto2018');
    Route::delete('/zipokoto2018', 'ZipoKoto2018Controller@index')->name('/zipokoto2018');
    Route::put('/zipokoto2018', 'ZipoKoto2018Controller@index')->name('/zipokoto2018');

});

Route::group(array('prefix' => 'api/v1'), function() {

    Route::get('/sitec', 'SiteCController@index')->name('/sitec');
    Route::post('/sitec', 'SiteCController@index')->name('/sitec');
    Route::delete('/sitec', 'SiteCController@index')->name('/sitec');
    Route::put('/sitec', 'SiteCController@index')->name('/sitec');

});

Route::group(array('prefix' => 'api/v1'), function() {


    Route::post('/sited', 'garagistesLOboController@store')->name('/sited');


});
Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/marcus1850', 'Marcus1850Controller@index')->name('/marcus1850');
Route::post('/marcus1850', 'Marcus1850Controller@index')->name('/marcus1850');
Route::delete('/marcus1850', 'Marcus1850Controller@index')->name('/marcus1850');
Route::put('/marcus1850', 'Marcus1850Controller@index')->name('/marcus1850');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/marcus18920', 'Marcus18920Controller@index')->name('/marcus18920');
Route::post('/marcus18920', 'Marcus18920Controller@index')->name('/marcus18920');
Route::delete('/marcus18920', 'Marcus18920Controller@index')->name('/marcus18920');
Route::put('/marcus18920', 'Marcus18920Controller@index')->name('/marcus18920');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/laraconection', 'laraconectionController@index')->name('/laraconection');
Route::post('/laraconection', 'laraconectionController@index')->name('/laraconection');
Route::delete('/laraconection', 'laraconectionController@index')->name('/laraconection');
Route::put('/laraconection', 'laraconectionController@index')->name('/laraconection');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/siya_db', 'siya_dbController@index')->name('/siya_db');
Route::post('/siya_db', 'siya_dbController@index')->name('/siya_db');
Route::delete('/siya_db', 'siya_dbController@index')->name('/siya_db');
Route::put('/siya_db', 'siya_dbController@index')->name('/siya_db');

         });
