<?php
namespace MarkDomkan\EnvTokenAuth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class EnvTokenAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
            Auth::extend('env-token', function ($app, $name, array $config) {
            return new EnvTokenAuthGuard($app['request']);
        });
    }

}

