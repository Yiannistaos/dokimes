<?php

namespace Yiannis\Dokimes;

use Illuminate\Support\ServiceProvider;
//Use Illuminate\Support\Facades\Route;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/migrations');
        //$this->publishes([__DIR__.'/migrations' => database_path('migrations')], 'yiannis-migrations');

       // if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/resources' => $this->app->resourcePath('views/yiannaros2'),
            ], 'yiannistaos');
     //   }





        //die(public_path('resources'));
        /*
        // Translations example.
        // `translations` is the tag.
        $this->publishes([
            __DIR__.'/example/translations' => 
            resource_path('lang/vendor/example')
        ], 'translations');

        // Migrations example.
        $this->publishes([
            __DIR__.'/example/migrations' => database_path('migrations')
        ], 'migrations');

        // Configuration example.
        // `config` is the tag.
        $this->publishes([
            __DIR__.'config/example.php' => config_path('example.php')
        ], 'config');

        // Public assets example.
        // `public` is the tag.
        $this->publishes([
            __DIR__.'example/assets' => public_path('vendor/example')
        ], 'public');
*/

        // `public` is the tag.
       /* $this->publishes([
            __DIR__.'resources' => public_path('vendor/example')
        ], 'public');
*/
    }

       /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

}