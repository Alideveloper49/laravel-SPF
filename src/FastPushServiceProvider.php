<?php

namespace Alideveloper49\FastPush;

use Illuminate\Support\ServiceProvider;


/**
 * Class FastPushServiceProvider
 *
 * @return Mughal\FastPush\Provider
 */

class FastPushServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        include __DIR__.'/../Models/SendFast.php';
        $this->publishes([
            __DIR__.'/../config/SendPushFast.php' => config_path('SendPushFast.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('FastPush', function($app) {
            return new FastPush(
                config('SendPushFast.key')
            );
        });
    }
}
