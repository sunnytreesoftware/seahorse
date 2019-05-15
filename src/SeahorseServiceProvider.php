<?php

namespace Sunnytree\Seahorse;

use Illuminate\Support\ServiceProvider;

class SeahorseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([__DIR__.'/../publishable/assets' => public_path('assets')]);
        $this->publishes([__DIR__.'/../publishable/app' => app_path()]);
        $this->publishes([__DIR__.'/../publishable/database/migrations' => database_path('migrations')]);
        $this->publishes([__DIR__.'/../publishable/resources/views' => resource_path('views')]);
        $this->publishes([__DIR__.'/../publishable/routes' => base_path('routes')]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes/seahorse.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'seahorsewelcome');
    }
}
