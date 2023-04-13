<?php

namespace App\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'test';
    }
}
