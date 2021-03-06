<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SpaceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\SpaceInterface\User\UserInterface','App\SpaceInterface\User\UserContract');
        $this->app->singleton('App\SpaceInterface\Address\AddressInterface','App\SpaceInterface\Address\AddressContract');
    }
}