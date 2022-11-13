<?php

namespace AingSh\Alexander\PackageHillelGeoTest;


use Illuminate\Support\ServiceProvider;
use Alexander\GeoServiceInterfaceTest\GeoServiceInterface;


class GeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GeoServiceInterface::class, function () {
          return new IpApiGeoService();
        });
    }
}