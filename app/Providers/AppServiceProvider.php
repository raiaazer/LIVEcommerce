<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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

        Inertia::share([
            'cartData' => function () {
                $sessionId = session()->getId();
                $cartDetail = Cart::where('sessionId', $sessionId)->first();

                $cartCount = 0;
                $cartItems = [];

                if ($cartDetail) {
                    $cartItems = json_decode($cartDetail->cart_items, true);
                    $cartCount = count($cartItems);
                }

                return [
                    'cartCount' => $cartCount,
                    'cartItems' => $cartItems,
                    'cartDetail'=>$cartDetail
                ];
            },
        ]);

    }
}
