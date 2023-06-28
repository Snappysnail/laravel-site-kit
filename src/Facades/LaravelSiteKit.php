<?php

namespace Snappysnail\LaravelSiteKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Snappysnail\LaravelSiteKit\LaravelSiteKit
 */
class LaravelSiteKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Snappysnail\LaravelSiteKit\LaravelSiteKit::class;
    }
}
