<?php

namespace Doclab\Doclab\Http\Middlewares;

use Closure;
use Facades\Doclab\Doclab\Services\BasicServices;

class CheckPid
{


    public function handle($request, Closure $next)
    {
        $pid = BasicServices::getPid();
        if(!$pid){
            return redirect()->route('installer');
        }
        return $next($request);
    }
}
