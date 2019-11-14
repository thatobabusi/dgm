<?php

namespace Thato\Commands;

use Illuminate\Support\ServiceProvider;

class ThatoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.thato.thato', function($app){
            return $app['Thato\Commands\ThatoCommand'];
        });

        $this->commands('command.thato.thato');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
