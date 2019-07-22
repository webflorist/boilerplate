<?php

namespace BoilerplateTests;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Routing\Router;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Webflorist\Boilerplate\BoilerplateServiceProvider;
use Webflorist\Boilerplate\BoilerplateFacade;

/**
 * Class TestCase
 * @package BoilerplateTests
 */
class TestCase extends BaseTestCase
{
    /**
     * @var Repository
     */
    protected $config;
    /**
     * @var Router
     */
    protected $router;

    protected function getPackageProviders($app)
    {
        return [
            BoilerplateServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Boilerplate' => BoilerplateFacade::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $this->router = $app[Router::class];
        $this->config = $app['config'];
    }


}