<?php

namespace App\Test\Providers;

class Test
{
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function config(string $key): mixed
    {
        return $this->config[$key] ?? null;
    }
}
