<?php

namespace Doclab\Doclab\Providers;

use Doclab\Doclab\Console\Commands\GetDocConfig;
use Doclab\Doclab\Console\Commands\RemoveDocConfig;
use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GetDocConfig::class,
                RemoveDocConfig::class
            ]);
        }
    }
}
