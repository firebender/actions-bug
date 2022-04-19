<?php

namespace Bugsy;

use Illuminate\Support\ServiceProvider;
use Bugsy\Actions\HelloAction;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                HelloAction::class,
            ]);
        }
    }
}
