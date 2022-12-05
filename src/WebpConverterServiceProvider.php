<?php

namespace Sujan\LaravelWebpConverter;

use Illuminate\Support\ServiceProvider;

class WebpConverterServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-webp-converter', function ($app) {
            return new \Sujan\LaravelWebpConverter\WebpConverter();
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-webp-converter.php',
            'laravel-webp-converter'
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
            __DIR__ . '/../config/laravel-webp-converter.php' => config_path('laravel-webp-converter.php'),
        ]);
    }
}
