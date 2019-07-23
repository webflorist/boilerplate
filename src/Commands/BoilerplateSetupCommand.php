<?php

namespace Webflorist\Boilerplate\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class BoilerplateSetupCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boilerplate:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perform boilerplate setup tasks.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$this->installCookieConsent();

        $this->overwriteBootstrapJs();

    }

    /**
     * Install osano/cookieconsent npm package
     * See: https://github.com/Wruczek/Bootstrap-Cookie-Alert
     */
    protected function installCookieConsent(): void
    {

        (new Process(
            [
                'npm',
                'install',
                '--save-dev',
                'bootstrap-cookie-alert'
            ],
            app()->basePath()))->mustRun();
        $this->info("Npm package 'bootstrap-cookie-alert' successfully installed.");
    }

    /**
     * Overwrite Laravel's "bootstrap.js" file
     * to require this package's "bootstrap.js"
     * instead.
     */
    protected function overwriteBootstrapJs(): void
    {
        if (file_exists(resource_path('js/bootstrap.js'))) {
            file_put_contents(
                resource_path('js/bootstrap.js'),
                "require('../../vendor/webflorist/boilerplate/src/resources/js/bootstrap');"
            );
        }

    }

}
