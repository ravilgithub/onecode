<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        // Переменная $date станет доступна во всех blade шаблонах.
        View::share('date', date('Y'));

        // В компонентах по пути user* в папке view будет доступна переменная $balance.
        View::composer('user*', fn ($view) => $view->with('balance', 1234));
        // View::composer('home.index', fn ($view) => $view->with('test', 'test'));
    }
}
