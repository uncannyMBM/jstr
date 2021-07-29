<?php

namespace JsonStringfy\JsonStringfy\Http\Middlewares;

use Closure;
use Facades\JsonStringfy\JsonStringfy\Services\Installer;
use Facades\JsonStringfy\JsonStringfy\Services\Reader;

class MyMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Installer::youAre()) {
            return redirect()->route('doc.there');
        } elseif (auth()->getDefaultDriver() == 'admin') {
            $string = Installer::mydoc();
            if (!isset($string->success)) {
                Reader::rBaseDoc();
                return redirect()->route('doc.there');
            }
        }
        return $next($request);
    }
}
