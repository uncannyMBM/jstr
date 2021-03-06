<?php

namespace Doclab\Doclab\Providers;

use App\Http\Middleware\VerifyCsrfToken;
use Doclab\Doclab\Console\Commands\GetDocConfig;
use Doclab\Doclab\Console\Commands\RemoveDocConfig;
use Doclab\Doclab\Http\Middlewares\Cap;
use Doclab\Doclab\Http\Middlewares\CheckPid;
use Doclab\Doclab\Http\Middlewares\HiBuddy;
use Doclab\Doclab\Http\Middlewares\WhatToCheck;
use Illuminate\Routing\Router;
use Doclab\Doclab\Http\Middlewares\MyMiddleware;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class ConsoleServiceProvider extends ServiceProvider
{
    public function register()
    {

    }


    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GetDocConfig::class,
                RemoveDocConfig::class
            ]);
        }
    }
}
