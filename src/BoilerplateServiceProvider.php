<?php

namespace Webflorist\Boilerplate;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

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
        $this->setBladeDirectives();
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
            ]);
        }
    }
	

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    private function loadTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . "/resources/lang","Webflorist-Boilerplate");
    }

    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'boilerplate');
    }

    private function setBladeDirectives()
    {
        /** @var BladeCompiler $blade */
        $blade =  app(BladeCompiler::class);
        $blade->directive('boilerplate', function ($marker='default') {
            return "<?php echo 'boilerplate' ?>";
        });
    }
}