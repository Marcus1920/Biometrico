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

Route::get('404' , function (){
    return view('404');
});

Route::get('/', function () {

    $allCompanies = Company::all();

    $allSites = Site::all();

    return view('auth.login', compact('allCompanies'));
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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
    Route::post('nqo' , function () {

        return  "nqo" ;
    });

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

Route::get('/site_a', 'Site_AController@index')->name('/site_a');
Route::post('/site_a', 'Site_AController@index')->name('/site_a');
Route::delete('/site_a', 'Site_AController@index')->name('/site_a');
Route::put('/site_a', 'Site_AController@index')->name('/site_a');


         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::get('/site_b', 'Site_BController@index')->name('/site_b');
Route::post('/site_b', 'Site_BController@index')->name('/site_b');
Route::delete('/site_b', 'Site_BController@index')->name('/site_b');
Route::put('/site_b', 'Site_BController@index')->name('/site_b');


         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/sita', 'sitAController@index')->name('/sita');
Route::post('/sita', 'sitAController@index')->name('/sita');
Route::delete('/sita', 'sitAController@index')->name('/sita');
Route::put('/sita', 'sitAController@index')->name('/sita');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::get('/site_c', 'Site_CController@index')->name('/site_c');
Route::post('/site_c', 'Site_CController@index')->name('/site_c');
Route::delete('/site_c', 'Site_CController@index')->name('/site_c');
Route::put('/site_c', 'Site_CController@index')->name('/site_c');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendency/site_e', 'Site_EController@attendencystore')->name('attendency/site_e');
Route::post('clockinglist/site_e', 'Site_EController@clockingliststore')->name('clockinglist/site_e');
Route::post('workshedul/site_e', 'Site_EController@workshedulstore')->name('workshedul/site_e');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysitef', 'SiteFController@attendencystore')->name('attendencysitef');
Route::post('clockinglistsitef', 'SiteFController@clockingliststore')->name('clockinglistsitef');
Route::post('workshedulsitef', 'SiteFController@workshedulstore')->name('workshedulsitef');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysiteg', 'siteGController@attendencystore')->name('attendencysiteg');
Route::post('clockinglistsiteg', 'siteGController@clockingliststore')->name('clockinglistsiteg');
Route::post('workshedulsiteg', 'siteGController@workshedulstore')->name('workshedulsiteg');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysih', 'SIHController@attendencystore')->name('attendencysih');
Route::post('clockinglistsih', 'SIHController@clockingliststore')->name('clockinglistsih');
Route::post('workshedulsih', 'SIHController@workshedulstore')->name('workshedulsih');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysiter', 'siteRController@attendencystore')->name('attendencysiter');
Route::post('clockinglistsiter', 'siteRController@clockingliststore')->name('clockinglistsiter');
Route::post('workshedulsiter', 'siteRController@workshedulstore')->name('workshedulsiter');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysitez', 'SiteZController@attendencystore')->name('attendencysitez');
Route::post('clockinglistsitez', 'SiteZController@clockingliststore')->name('clockinglistsitez');
Route::post('workshedulsitez', 'SiteZController@workshedulstore')->name('workshedulsitez');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysiteq', 'SiteQController@attendencystore')->name('attendencysiteq');
Route::post('clockinglistsiteq', 'SiteQController@clockingliststore')->name('clockinglistsiteq');
Route::post('workshedulsiteq', 'SiteQController@workshedulstore')->name('workshedulsiteq');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysitey', 'SiteYController@attendencystore')->name('attendencysitey');
Route::post('clockinglistsitey', 'SiteYController@clockingliststore')->name('clockinglistsitey');
Route::post('workshedulsitey', 'SiteYController@workshedulstore')->name('workshedulsitey');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysiten', 'SiteNController@attendencystore')->name('attendencysiten');
Route::post('clockinglistsiten', 'SiteNController@clockingliststore')->name('clockinglistsiten');
Route::post('workshedulsiten', 'SiteNController@workshedulstore')->name('workshedulsiten');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencysite', 'siteController@attendencystore')->name('attendencysite');
Route::post('clockinglistsite', 'siteController@clockingliststore')->name('clockinglistsite');
Route::post('workshedulsite', 'siteController@workshedulstore')->name('workshedulsite');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencyxx12', 'xx12Controller@attendencystore')->name('attendencyxx12');
Route::post('clockinglistxx12', 'xx12Controller@clockingliststore')->name('clockinglistxx12');
Route::post('workshedulxx12', 'xx12Controller@workshedulstore')->name('workshedulxx12');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencyxx13', 'xx13Controller@attendencystore')->name('attendencyxx13');
Route::post('clockinglistxx13', 'xx13Controller@clockingliststore')->name('clockinglistxx13');
Route::post('workshedulxx13', 'xx13Controller@workshedulstore')->name('workshedulxx13');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencysqw', 'sqwController@attendencystore')->name('attendencysqw');
Route::post('clockinglistsqw', 'sqwController@clockingliststore')->name('clockinglistsqw');
Route::post('workshedulsqw', 'sqwController@workshedulstore')->name('workshedulsqw');

   

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencytyz', 'tyzController@attendencystore')->name('attendencytyz');
Route::post('clockinglisttyz', 'tyzController@clockingliststore')->name('clockinglisttyz');
Route::post('workshedultyz', 'tyzController@workshedulstore')->name('workshedultyz');
         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencyxw23', 'xw23Controller@attendencystore')->name('attendencyxw23');
Route::post('clockinglistxw23', 'xw23Controller@clockingliststore')->name('clockinglistxw23');
Route::post('workshedulxw23', 'xw23Controller@workshedulstore')->name('workshedulxw23');

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencyqrter', 'qrterController@attendencystore')->name('attendencyqrter');
Route::post('clockinglistqrter', 'qrterController@clockingliststore')->name('clockinglistqrter');
Route::post('workshedulqrter', 'qrterController@workshedulstore')->name('workshedulqrter');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencyqrter', 'qrterController@attendencystore')->name('attendencyqrter');
Route::post('clockinglistqrter', 'qrterController@clockingliststore')->name('clockinglistqrter');
Route::post('workshedulqrter', 'qrterController@workshedulstore')->name('workshedulqrter');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencyasd', 'ASDController@attendencystore')->name('attendencyasd');
Route::post('clockinglistasd', 'ASDController@clockingliststore')->name('clockinglistasd');
Route::post('workshedulasd', 'ASDController@workshedulstore')->name('workshedulasd');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencysitea', 'SiteAController@attendencystore')->name('attendencysitea');
Route::post('clockinglistsitea', 'SiteAController@clockingliststore')->name('clockinglistsitea');
Route::post('workshedulsitea', 'SiteAController@workshedulstore')->name('workshedulsitea');
   

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencyqwe', 'qweController@attendencystore')->name('attendencyqwe');
Route::post('clockinglistqwe', 'qweController@clockingliststore')->name('clockinglistqwe');
Route::post('workshedulqwe', 'qweController@workshedulstore')->name('workshedulqwe');

         });

Route::group(array('prefix' => 'api/v1'), function() {


Route::post('attendencyjkl', 'jklController@attendencystore')->name('attendencyjkl');
Route::post('clockinglistjkl', 'jklController@clockingliststore')->name('clockinglistjkl');
Route::post('worksheduljkl', 'jklController@workshedulstore')->name('worksheduljkl');

         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencykfc', 'KFCController@attendencystore')->name('attendencykfc');
Route::post('clockinglistkfc', 'KFCController@clockingliststore')->name('clockinglistkfc');
Route::post('workshedulkfc', 'KFCController@workshedulstore')->name('workshedulkfc');
         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencykfg', 'KFGController@attendencystore')->name('attendencykfg');
Route::post('clockinglistkfg', 'KFGController@clockingliststore')->name('clockinglistkfg');
Route::post('workshedulkfg', 'KFGController@workshedulstore')->name('workshedulkfg');
         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencykfg', 'KFGController@attendencystore')->name('attendencykfg');
Route::post('clockinglistkfg', 'KFGController@clockingliststore')->name('clockinglistkfg');
Route::post('workshedulkfg', 'KFGController@workshedulstore')->name('workshedulkfg');
         });

Route::group(array('prefix' => 'api/v1'), function() {

Route::post('attendencykfc', 'KFCController@attendencystore')->name('attendencykfc');
Route::post('clockinglistkfc', 'KFCController@clockingliststore')->name('clockinglistkfc');
Route::post('workshedulkfc', 'KFCController@workshedulstore')->name('workshedulkfc');
         });
