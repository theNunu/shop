<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\Cart as ShoppingCart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
            $this->app->singleton('cart', function ($app) {
        return new ShoppingCart(
            $app['session'],
            $app['events']
        );
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
