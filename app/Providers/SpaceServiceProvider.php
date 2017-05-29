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
        $this->app->bind('App\SpaceInterface\User\UserInterface','App\SpaceInterface\User\UserContract');
    }
}