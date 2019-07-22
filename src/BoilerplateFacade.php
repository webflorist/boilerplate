<?php

namespace Webflorist\Boilerplate;

use Illuminate\Support\Facades\Facade;

class BoilerplateFacade extends Facade {

    /**
     * Static access-proxy for the Boilerplate
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return BoilerplateService::class; }

}