<?php

namespace Doclab\Doclab\Providers;

use Illuminate\Support\ServiceProvider;

class DocLabServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/doclab.php', 'requirements'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/setting.php', 'setting'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/json.php', 'json'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/java.php', 'java'
        );
    }


    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'doclab');
        $this->publishes([
            __DIR__ . '/../views/assets' => public_path('local'),
        ], 'installerAssets');
        $this->publishes([
            __DIR__ . '/../config/doclab.php' => config_path('requirements.php'),
        ], 'installerConfig');
    }
}
