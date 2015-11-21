<?php

namespace Chearaan\Advice\Facades;

use Illuminate\Support\Facades\Facade;

class Advice extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'advice';
    }
}
