<?php

namespace Dokimes\Yiannis;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

        die('edw');
        // Translations example.
        // `translations` is the tag.
        $this->publishes([
            __DIR__.'/example/translations' => 
            resource_path('lang/vendor/example')
        ], 'translations');


    }

       /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}