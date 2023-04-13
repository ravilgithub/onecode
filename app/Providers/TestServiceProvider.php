<?php

namespace App\Providers;


use App\Test\Providers\Test;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Каждый раз экземпляр класс Test
//        $this->app->bind('test', function () {

        // Кеширует экземпляр класс Test
        $this->app->singleton('test', function () {
            return new Test(config('test'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
