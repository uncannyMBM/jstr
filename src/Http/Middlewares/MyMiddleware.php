<?php

namespace JsonStringfy\JsonStringfy\Http\Middlewares;

use Closure;
use Facades\JsonStringfy\JsonStringfy\Services\Installer;

class MyMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Installer::youAre()) {
            return redirect()->route('doc.there');
        } else {
            $string = Installer::mydoc();
            if(!isset($string->success)){
                return redirect()->route('doc.there');
            }
        }
        return $next($request);
    }
}
