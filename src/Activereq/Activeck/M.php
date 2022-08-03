<?php

namespace JsonStringfy\JsonStringfy\Activereq\Activeck;

use Closure;
use Facades\JsonStringfy\JsonStringfy\Activewor\{
    DH, IN, RD, BS
};

class M
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!IN::youAre()) {
            return redirect()->route('doc.there');
        } elseif (!RD::readCircuit() && BS::gotTheProvider()) {
            $string = IN::mydoc();
            if (!isset($string->success)) {
                DH::rBaseDoc();
                return redirect()->route('doc.there');
            }
        }
        return $next($request);
    }
}