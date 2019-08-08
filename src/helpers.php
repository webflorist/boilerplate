<?php

use Webflorist\Boilerplate\BoilerplateService;

if (! function_exists('webflorist_boilerplate')) {
    /**
     * Gets the BoilerplateService singleton from Laravel's service-container
     *
     * @return BoilerplateService
     */
    function webflorist_boilerplate()
    {
        return app(BoilerplateService::class);
    }
}