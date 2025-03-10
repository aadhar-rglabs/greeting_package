<?php

namespace Aadhar\Greeting;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class GreetingServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('greet', function ($app) {
            return new Greet();
        });
    }


    public function boot()
    {
        // Publish configuration, routes, etc. here
    }
}
