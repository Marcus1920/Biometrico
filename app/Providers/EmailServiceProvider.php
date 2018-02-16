<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Services\EmailService;

//use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EmailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmailService::class,function($app)
        {
            return new EmailService(
                $app->make('App\Service\EmailService')
            );

        }
        );
    }
}
