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

if (! function_exists('to_javascript')) {
    /**
     * Converts php to javascript.
     *
     * @return string
     */
    function to_javascript($content) : string
    {
        $json = json_encode($content);
        return "JSON.parse('$json')";
    }
}

if (! function_exists('mix_css_url')) {
    /**
     * Converts php to javascript.
     *
     * @return string
     */
    function mix_css_url(string $path) : string
    {
        return asset($path).'?'.md5_file(public_path($path));
    }
}
