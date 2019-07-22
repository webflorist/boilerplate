<?php

use Webflorist\Boilerplate\BoilerplateService;

if (! function_exists('boilerplate')) {
    /**
     * Gets the BoilerplateService singleton from Laravel's service-container
     *
     * @return BoilerplateService
     */
    function boilerplate()
    {
        return app(BoilerplateService::class);
    }
}