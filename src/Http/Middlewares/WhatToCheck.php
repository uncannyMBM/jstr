<?php

namespace Doclab\Doclab\Http\Middlewares;

use Closure;
use Facades\Doclab\Doclab\Services\BasicServices;
use Facades\Doclab\Doclab\Services\Installer;
use Illuminate\Support\Facades\Request;

class WhatToCheck
{
    public function handle($request, Closure $next)
    {
        if (!Installer::youAre()) {
            return $next($request);
        }
        abort(404);
    }
}
