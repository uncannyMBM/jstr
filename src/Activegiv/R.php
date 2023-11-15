<?php

namespace StrIlluminate\StrIlluminate\Activegiv;

use StrIlluminate\StrIlluminate\Activereq\Activeck\{
    CP, CPd, M, WTC
};
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class R extends ServiceProvider
{
    public function register()
    {
        $router = $this->app->make(Router::class);
        $router->middlewareGroup('docWeb', array(
                StartSession::class,
                ShareErrorsFromSession::class
            )
        );
        $router->pushMiddlewareToGroup('docWeb', WTC::class);
        $router->pushMiddlewareToGroup('pidWeb', CPd::class);
    }

    public function boot()
    {
        $kernel = app()->make(Kernel::class);
        $kernel->appendToMiddlewarePriority(M::class);
        $this->loadRoutesFrom(__DIR__ . '/../Activedwe/w.php');
        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', M::class);
        $router->pushMiddlewareToGroup('api', M::class);
        $router->aliasMiddleware('cap', CP::class);
    }
}
