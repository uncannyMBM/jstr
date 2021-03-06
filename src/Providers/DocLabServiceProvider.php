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

class DocLabServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/doclab.php', 'requirements'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/setting.php', 'setting'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/json.php', 'json'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/java.php', 'java'
        );
    }


    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'doclab');
        $this->publishes([
            __DIR__ . '/../views/assets' => public_path('local'),
        ], 'installerAssets');
        $this->publishes([
            __DIR__ . '/../config/doclab.php' => config_path('requirements.php'),
        ], 'installerConfig');
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('cap', Cap::class);
        if ($this->app->runningInConsole()) {
            $this->commands([
                GetDocConfig::class,
                RemoveDocConfig::class
            ]);
        }
    }
}
