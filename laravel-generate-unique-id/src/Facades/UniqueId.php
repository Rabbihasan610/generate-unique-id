<?php

namespace Hasan\LaravelUniqueId\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class UniqueId extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'laravel-unique-id';
    }
}
