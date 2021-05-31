<?php

namespace Alideveloper49\FastPush\Facades;

use Illuminate\Support\Facades\Facade;

class FastPush extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'FastPush';
    }
}
