<?php

namespace App\Providers;

use App\Models\skill;
use Illuminate\Support\ServiceProvider;
use Illuminate\contracts\View\View;
use Illuminate\Support\Facades\Route;
use DB;

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

            // view()->composer('*', function (View $view)
            // {
            //     dd(Route::current()->parameters());

            //     // $skill = skill::all;
                
            //     // $view->with('skill', $skill);
            // });
    }
}
