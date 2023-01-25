<?php

namespace App\Providers;

use App\District;
use App\Models\Setting;
use App\Thana;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share("profile", Setting::first());
        View::share("districts", District::orderBy("name", "ASC")->get());
        Schema::defaultStringLength(191);
    }
}
