<?php

namespace Doclab\Doclab\Http\Middlewares;

use Closure;
use Facades\Doclab\Doclab\Services\BasicServices;
use Facades\Doclab\Doclab\Services\Installer;

class Cap
{
    public function handle($request, Closure $next)
    {
        if (Installer::youAre()) {
            $string = Installer::mydoc();
            if(isset($string->success)){
                abort(404);
            }
        }
        return $next($request);
    }
}
