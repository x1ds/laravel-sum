<?php

namespace Nazububu\LaravelSum\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Sum
 *
 * @package Nazububu\LaravelSum\Facades
 */
class Sum extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-sum';
    }
}
