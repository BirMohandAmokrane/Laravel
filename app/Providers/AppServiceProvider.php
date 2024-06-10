<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // cett View::Share permet d'afficher les variable $totprice et $nbrprod dans toutes les vues
        View::composer('*', function ($view) {
            $products = session()->has('panier') ? session()->get('panier') : [];
            $productCount = count($products);
            $totalPrice = 0;
            foreach ($products as $product) {
                $totalPrice += $product['price'] * $product['qty'];
            }
            $view->with('productCount', $productCount);
            $view->with('totalPrice', $totalPrice);
        });
    }
}
