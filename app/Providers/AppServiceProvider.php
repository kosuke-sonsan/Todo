<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\AuthenticatedUser;
use App\Repository\LaravelAuthenticatedUser;

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
        //
    }
}