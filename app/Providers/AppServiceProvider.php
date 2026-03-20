<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Service;
use App\Models\Suburb;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            $services = Cache::remember('services', 60, function () {
                return Service::whereNull('suburbname')->get();
            });

            $suburbs = Cache::remember('suburbs', 60, function () {
                return Suburb::all();
            });

            $view->with([
                'services' => $services,
                'suburbs' => $suburbs,
            ]);
        });
    }
}
