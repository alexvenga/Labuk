<?php

namespace AlexVenga\Labuk;

use Illuminate\Support\ServiceProvider;
use AlexVenga\Labuk\View\Components\AppLayout;

class LabukServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'labuk');
    }

    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'labuk');
        $this->loadViewComponentsAs('labuk', [
            AppLayout::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('labuk.php'),
            ], 'config');
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/labuk'),
            ], 'views');
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../src/View/Components/'        => app_path('View/Components'),
                __DIR__ . '/../resources/views/components/' => resource_path('views/components'),
            ], 'view-components');
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views/components/main-menu.blade.php' => resource_path('views/vendor/labuk/components/main-menu.blade.php'),
            ], 'main-menu-view-component');
        }


    }

}
