<?php

namespace AingShIp\GeoIpServicePackage;
/**
 * v1.0.4
 */

use Alexander\GeoServiceInterface\GeoServiceInterface;
use Illuminate\Support\ServiceProvider;


class GeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GeoServiceInterface::class, function () {
          return new IpApiGeoService();
        });
    }
}