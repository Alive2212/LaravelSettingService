<?php

namespace Alive2212\LaravelSettingService\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelSettingService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelsettingservice';
    }
}
