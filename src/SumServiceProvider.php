<?php

namespace Nazububu\LaravelSum;

use Illuminate\Support\ServiceProvider;

/**
 * Class SumServiceProvider
 *
 * @package Nazububu\LaravelSum
 */
class SumServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('laravel-sum', function () {
            return new Sum;
        });
    }

    /**
     * Get the services provided by the provider
     *
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-sum'];
    }
}
