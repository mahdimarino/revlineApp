<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\HubSpotFeedService;
use App\Services\DemandGenFeedService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(HubSpotFeedService::class, function ($app) {
            return new HubSpotFeedService();
        });

        $this->app->singleton(DemandGenFeedService::class, function ($app) {
            return new DemandGenFeedService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
