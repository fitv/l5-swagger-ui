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
            dirname(__DIR__).'/config/swagger-ui.php', 'swagger-ui'
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
            dirname(__DIR__).'/resources/assets' => public_path('vendor/l5-swagger-ui'),
        ], 'public');

        $this->publishes([
            dirname(__DIR__).'/resources/docs' => resource_path('docs'),
        ], 'resource');

        $this->publishes([
            dirname(__DIR__).'/config/swagger-ui.php' => config_path('swagger-ui.php'),
        ], 'config');

        $this->loadViewsFrom(dirname(__DIR__).'/resources/views', 'l5-swagger-ui');

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
