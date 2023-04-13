<?php
// https://laravel-news.com/creating-helpers
// Registered  on  composer.json autoload/files
// CLI composer dump

if (!function_exists('test')) {

    /**
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     */
    function test(): mixed
    {
        return app('test');
    }
}
