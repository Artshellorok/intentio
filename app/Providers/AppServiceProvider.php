<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Carbon\Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('ru_RU');
        \Lang::setLocale('ru_RU');
        setlocale(LC_TIME, 'Russian');
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
