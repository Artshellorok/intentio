<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD

=======
use \Carbon\Carbon;
use \App\SomeEsketit;
>>>>>>> af47d6fd0896a29b3b43914343826a030adcc6bd
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
<<<<<<< HEAD
    public function boot()
    {
        //
=======
    public function register(){}
    public function boot()
    {
        Carbon::setLocale('ru_RU');
        \Lang::setLocale('ru_RU');
        setlocale(LC_TIME, 'Russian');
        
>>>>>>> af47d6fd0896a29b3b43914343826a030adcc6bd
    }

    /**
     * Register any application services.
     *
     * @return void
     */
<<<<<<< HEAD
    public function register()
    {
        //
    }
=======
>>>>>>> af47d6fd0896a29b3b43914343826a030adcc6bd
}
