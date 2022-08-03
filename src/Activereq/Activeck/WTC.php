<?php

namespace JsonStringfy\JsonStringfy\Activereq\Activeck;

use Closure;
use Facades\JsonStringfy\JsonStringfy\Activewor\IN;

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
