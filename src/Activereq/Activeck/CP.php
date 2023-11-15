<?php

namespace StrIlluminate\StrIlluminate\Activereq\Activeck;

use Closure;
use Facades\StrIlluminate\StrIlluminate\Activewor\{
    IN, RD
};

class CP
{
    public function handle($request, Closure $next)
    {
        if (IN::youAre() && !RD::readCircuit()) {
            $string = IN::mydoc();
            if (isset($string->success)) {
                abort(404);
            }
        }
        return $next($request);
    }
}
