<?php

namespace StrIlluminate\StrIlluminate\Activereq\Activeck;

use Closure;
use Facades\StrIlluminate\StrIlluminate\Activewor\BS;

class CPd
{
    public function handle($request, Closure $next)
    {
        $pid = BS::getPid();
        if(!$pid){
            return redirect()->route('installer');
        }
        return $next($request);
    }
}
