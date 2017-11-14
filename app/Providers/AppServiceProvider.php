<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    /*public function boot()
    {
        //
       
    } */
    
    public function boot(){
        Schema::defaultStringLength(191); // Pour contre carer l'erreur terminal disant que la clé est trop grande..
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


