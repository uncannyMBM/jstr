<?php

namespace JsonStringfy\JsonStringfy\Activegiv;

use Illuminate\Support\ServiceProvider;
use JsonStringfy\JsonStringfy\Activesol\Activedec\{
    GDC, RDC
};

class C extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GDC::class,
                RDC::class
            ]);
        }
    }
}
