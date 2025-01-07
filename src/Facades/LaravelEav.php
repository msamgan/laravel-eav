<?php

namespace Msamgan\LaravelEav\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Msamgan\LaravelEav\LaravelEav
 */
class LaravelEav extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Msamgan\LaravelEav\LaravelEav::class;
    }
}
