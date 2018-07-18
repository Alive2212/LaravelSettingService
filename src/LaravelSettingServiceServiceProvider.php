<?php

namespace Alive2212\LaravelSettingService;

use Illuminate\Support\ServiceProvider;

class LaravelSettingServiceServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(resource_path('lang/vendor/alive2212'), 'laravel_setting_service');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the translation files.
            $this->publishes([
                __DIR__ . '/../resources/lang/' => resource_path('lang/vendor/alive2212'),
            ], 'laravel_setting_service.lang');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravelsettingservice.php', 'laravelsettingservice');

        // Register the service the package provides.
        $this->app->singleton('laravelsettingservice', function ($app) {
            return new LaravelSettingService;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelsettingservice'];
    }
}