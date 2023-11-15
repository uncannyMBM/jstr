<?php

namespace StrIlluminate\StrIlluminate\Activegiv;

use Illuminate\Support\ServiceProvider;
use StrIlluminate\StrIlluminate\Activesol\Activedec\{
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
