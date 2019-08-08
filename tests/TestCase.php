<?php

namespace BoilerplateTests;

use HtmlFactoryTests\Traits\AssertsHtml;
use Illuminate\Contracts\Config\Repository;
use Illuminate\View\Factory;
use Illuminate\Routing\Router;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Webflorist\Boilerplate\BoilerplateService;
use Webflorist\Boilerplate\BoilerplateServiceProvider;
use Webflorist\Boilerplate\BoilerplateFacade;
use Webflorist\RouteTree\RouteTreeServiceProvider;

/**
 * Class TestCase
 * @package BoilerplateTests
 */
class TestCase extends BaseTestCase
{
    use AssertsHtml;

    /**
     * @var Repository
     */
    protected $config;

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var BoilerplateService
     */
    protected $boilerplateService;

    protected function getPackageProviders($app)
    {
        return [
            RouteTreeServiceProvider::class,
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
        /** @var Factory $viewService */
        $viewService = $app['view'];
        $viewService->addNamespace('bootstrap-tests', __DIR__ . '/views');
        $this->router = $app[Router::class];
        $this->config = $app['config'];
        $this->boilerplateService = $app[BoilerplateService::class];
    }


}