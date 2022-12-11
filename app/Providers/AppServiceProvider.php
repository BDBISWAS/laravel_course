<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('first_service_provider',function($app){
            dd("this is  first_service_provider");

        });
        app()->bind('secound_service_provider',function($app){
            dd("this is  secound_service_provider");

        });
        app()->bind('third_service_provider',function($app){
            dd("this is  third_service_provider");

        });
        app()->bind('four_service_provider',function($app){
            dd("this is  four_service_provider");

        });
        

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
