<?php
namespace Wemade\LaravelAdmin;

use Illuminate\Support\ServiceProvider;

class WeMadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
//        $this->
    }

    public function loadRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Wemade');
    }
}
