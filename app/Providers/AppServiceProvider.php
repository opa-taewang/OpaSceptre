<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // //compose all the views....
        view()->composer('*', function ($view) {
            // dd(Auth::guest());
            if(Auth::guest())
            {
                \App\MyCookie::visitorId();
            }
        });
    }
}
