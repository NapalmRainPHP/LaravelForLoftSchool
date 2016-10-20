<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    public function boot() {
		$cats = \App\GoodsCategory::all();
		$RG = \App\Good::inRandomOrder()->first();
		View::share('Categories', $cats);
		View::share('RandomeGame', $RG);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
}
