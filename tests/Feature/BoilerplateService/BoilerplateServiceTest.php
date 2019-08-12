<?php

namespace BoilerplateTests\Feature\BoilerplateService;

use BoilerplateTests\TestCase;

class BoilerplateServiceTest extends TestCase
{

    public function test_getCountryList()
    {
        $countryList = webflorist_boilerplate()->getCountryList();
        $this->assertEquals(
            'Austria',
            $countryList['AT']
        );
    }

}