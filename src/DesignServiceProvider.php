<?php

namespace CozyFex\LaravelDesign;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

class DesignServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function register()
    {
        $this->app->make('CozyFex\LaravelDesign\Controllers\FormController');
        $this->app->make('CozyFex\LaravelDesign\Controllers\GalleryController');
        $this->app->make('CozyFex\LaravelDesign\Controllers\PasswordController');
        $this->app->make('CozyFex\LaravelDesign\Controllers\TableController');
        $this->app->make('CozyFex\LaravelDesign\Controllers\ULController');
        $this->app->make('CozyFex\LaravelDesign\Controllers\ViewController');
        $this->app->make('CozyFex\LaravelDesign\Controllers\WidgetController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'design');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/CozyFex/Laravel/Design'),
        ]);
        $this->publishes([
            __DIR__.'/assets' => public_path('cozyfex'),
        ], 'public');
    }
}
