<?php

namespace Webflorist\Boilerplate;

use Webflorist\Boilerplate\CookieConsent\CookieConsentService;

/**
 * The main service-class of this package.
 *
 * Class BoilerplateService
 * @package Webflorist\Boilerplate
 *
 */
class BoilerplateService
{
    /**
     * @var CookieConsentService
     */
    public $cookieConsent;

    /**
     * BoilerplateService constructor.
     */
    public function __construct()
    {
        $this->cookieConsent = new CookieConsentService();
    }
}