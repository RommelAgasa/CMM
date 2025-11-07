<?php

namespace App\Providers;

use App\Interfaces\IClientRepository;
use App\Interfaces\IClientService;
use App\Repositories\ClientRepository;
use App\Services\ClientService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repository Binders
        $this->app->bind(IClientRepository::class, ClientRepository::class);

        // Service Binders
        $this->app->bind(IClientService::class, ClientService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
