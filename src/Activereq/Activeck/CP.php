<?php

namespace JsonStringfy\JsonStringfy\Activereq\Activeck;

use Closure;
use Facades\JsonStringfy\JsonStringfy\Activewor\{
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
