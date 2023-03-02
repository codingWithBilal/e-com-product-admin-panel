<?php

namespace App\Providers;
use App\Models\Addon;
use App\Models\AddonCategory;
use App\Models\Product;

use Illuminate\Support\ServiceProvider;

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
        view()->composer('admin.dashboard',function($view){
        $products = Product::latest()->paginate(10);
        $productsCount = Product::count();
        $addonsCategoryCount = AddonCategory::count();
        $addonsCount = Addon::count();
        $view->with('products', $products)
             ->with('productsCount', $productsCount)
             ->with('addonsCategoryCount', $addonsCategoryCount)
             ->with('addonsCount', $addonsCount);
        });
    }
}
