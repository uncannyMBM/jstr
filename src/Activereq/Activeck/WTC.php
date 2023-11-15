<?php

namespace StrIlluminate\StrIlluminate\Activereq\Activeck;

use Closure;
use Facades\StrIlluminate\StrIlluminate\Activewor\IN;

class WTC
{
    public function handle($request, Closure $next)
    {
        if (!IN::youAre()) {
            return $next($request);
        }
        abort(404);
    }
}
