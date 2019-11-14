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
        $this->registerThatoCommand();
        $this->registerThatoTwoCommand();
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

    public function registerThatoCommand()
    {
        $this->app->singleton('command.thato.thato', function($app){
            return $app['Thato\Commands\ThatoCommand'];
        });
        $this->commands('command.thato.thato');
    }
    public function registerThatoTwoCommand()
    {
        $this->app->singleton('command.thato.thatotwo', function($app){
            return $app['Thato\Commands\ThatoTwoCommand'];
        });
        $this->commands('command.thato.thatotwo');
    }
}
