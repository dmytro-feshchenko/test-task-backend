<?php

namespace Modules\Users\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(callback: __DIR__ . '/../routes/web.php');

            Route::middleware('api')
                ->group(callback: __DIR__ . '/../routes/api.php');
        });
    }
}
