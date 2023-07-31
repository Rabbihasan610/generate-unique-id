<?php

namespace Hasan\LaravelUniqueId;
use Illuminate\Support\ServiceProvider;

class UniqueIdServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('Hasan\LaravelUniqueId\UniqueId', function ($app) {
            return new UniqueId();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-unique-id.php', 'desiredLength'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel-unique-id.php' => config_path('laravel-unique-id.php'),
        ]);
    }
}
