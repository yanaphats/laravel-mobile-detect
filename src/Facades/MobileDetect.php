<?php

namespace Sandbox\MobileDetect\Facades;

use Illuminate\Support\Facades\Facade;

class MobileDetect extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'mobile-detect';
    }
}
