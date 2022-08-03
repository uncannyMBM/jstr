<?php

namespace JsonStringfy\JsonStringfy\Activegiv;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class E extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('canbevis', function ($expression) {
            return base64_decode($expression);
        });

        Str::macro('pol', function ($str, $type = '') {
            return $type == 'conf' ? config(base64_decode($str)) : ($type == 'ass' ? asset(base64_decode($str)) : ($type == 'url' ? url(base64_decode($str)) : ($type == 'route' ? route(base64_decode($str)) : base64_decode($str))));
        });
    }
}