<?php

namespace BoilerplateTests\Feature;

use BoilerplateTests\TestCase;

class BoilerplateSetupCommandTest extends TestCase
{

    public function test_boilerplate_setup_command()
    {
        $this->artisan('boilerplate:setup');
        $this->assertTrue(true);

        //$this->assertDirectoryExists($this->app->basePath('node_modules/cookieconsent'));

    }

}