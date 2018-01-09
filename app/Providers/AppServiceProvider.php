<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        //To support laravel 5.4 database charset
        Schema::defaultStringLength(191);
    
        //Set the locale to be use in the request
        if ($request->segment(1) != null)
        {
            app()->setLocale($request->segment(1));
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
