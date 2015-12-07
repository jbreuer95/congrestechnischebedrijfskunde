<?php

namespace App\Providers;

use App\Sessie;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.sessies', function($view){
            $all = Sessie::all();
            $filtered = $all->filter(function ($item) {
                return $item->max_inschrijvingen > count($item->inschrijvingen);
            });
            $view->with('sessies', $filtered->unique('title'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
