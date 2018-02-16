<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

//    public function boot(Router $router)
//    {
//        //
//
//        parent::boot($router);
//    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require base_path('/Routes/web1.php');
        });

        $this->mapApiRoutes();

        $this->mapWebRoutes();

//        $router->group(['domain' => 'status.example.com', 'namespace' => 'Status'], function($router) {
////            require app_path('routes\web1.php');
//            require "C:/xampp/htdocs/Biometrico/routes/web1.php";
//        });


        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

//        Route::middleware('web1')
//            ->namespace($this->Web1Namespace)
//            ->group(base_path('routes/web1.php'));
    }

//    protected function mapWebRoutes1()
//    {
//        Route::middleware('web1')
//            ->namespace($this->namespace)
//            ->group(base_path('routes/web1.php'));
//    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
