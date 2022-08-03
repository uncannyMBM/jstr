<?php

namespace JsonStringfy\JsonStringfy\Activegiv;

use Illuminate\Support\ServiceProvider;

class A extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Activesyno/DL.php', 'requirements'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../Activesyno/ST.php', 'setting'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../Activesyno/JS.php', 'json'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../Activesyno/JV.php', 'java'
        );
    }


    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Activesce', 'pdoc');
        $this->publishes([
            __DIR__ . '/../Activesyno/DL.php' => config_path('requirements.php'),
        ], 'installerConfig');
    }
}