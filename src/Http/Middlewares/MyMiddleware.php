<?php

namespace Doclab\Doclab\Http\Middlewares;

use Closure;
use Facades\Doclab\Doclab\Services\BasicServices;
use Facades\Doclab\Doclab\Services\Installer;
use Facades\Doclab\Doclab\Services\Reader;
use Facades\Doclab\Doclab\Services\RequestResolve;

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
