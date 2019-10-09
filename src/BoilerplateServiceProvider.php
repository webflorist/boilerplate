<?php

namespace Webflorist\Boilerplate;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Webflorist\Boilerplate\Commands\BoilerplateSetupCommand;
use Webflorist\Boilerplate\Middleware\RedirectNonWwwDomain;

class BoilerplateServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
        $this->registerService();
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
        $this->registerArtisanCommands();
        $this->loadMigrations();
        $this->loadTranslations();
        $this->loadViews();

        if (config('boilerplate.redirect_non_www_domain')) {
            $this->addmiddleware(RedirectNonWwwDomain::class);
        }

    }

    protected function mergeConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/boilerplate.php', 'boilerplate');
    }

    protected function registerService()
    {
        $this->app->singleton(BoilerplateService::class, function () {
            return new BoilerplateService();
        });
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/config/boilerplate.php' => config_path('boilerplate.php'),
        ]);
    }

    protected function registerArtisanCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BoilerplateSetupCommand::class
            ]);
        }
    }

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    private function loadTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . "/resources/lang","webflorist-boilerplate");
    }

    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'webflorist-boilerplate');
    }

    private function addMiddleware(string $middleware)
    {
        if($this->app['router']->hasMiddlewareGroup('web')) {
            $this->app['router']->pushMiddlewareToGroup('web', $middleware);
        }
    }

}