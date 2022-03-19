<?php

namespace L5SwaggerUI;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/config/swagger.php', 'swagger'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/l5-swagger-ui'),
        ], 'public');

        $this->publishes([
            dirname(__DIR__).'/config/swagger.php' => config_path('swagger.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'l5-swagger-ui');

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
