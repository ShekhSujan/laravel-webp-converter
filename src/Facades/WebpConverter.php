<?php

namespace Sujan\LaravelWebpConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sujan\LaravelWebpConverter\WebpConverter
 */
class WebpConverter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-webp-converter';
    }
}
