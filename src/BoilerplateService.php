<?php

namespace Webflorist\Boilerplate;

/**
 * The main service-class of this package.
 *
 * Class BoilerplateService
 * @package Webflorist\Boilerplate
 *
 */
class BoilerplateService
{

    public function getCountryList() {
        $locale = app()->getLocale();
        $vendorFolder = base_path('vendor');
        if (app()->environment() === 'testing') {
            $vendorFolder = dirname(__DIR__) . '/vendor';
        }
        return include "$vendorFolder/umpirsky/country-list/data/$locale/country.php" ;
    }

}