<?php
namespace Wemade\LaravelAdmin;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__ . '/resources/views/backend', 'backend');
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views')
            ]);
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
        $this->loadViewsFrom(__DIR__ . '/resources/views/backend', 'backend');
    }
}
