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

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', MyMiddleware::class);
        $router->middlewareGroup('docWeb', array(
                StartSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
            )
        );
        $router->pushMiddlewareToGroup('docWeb', WhatToCheck::class);
        $router->pushMiddlewareToGroup('pidWeb', CheckPid::class);
    }


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('cap', Cap::class);
    }
}
