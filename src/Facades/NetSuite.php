<?php

namespace NetSuite\Facades;

use Illuminate\Support\Facades\Facade;

class NetSuite extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'netsuite';
    }
}
