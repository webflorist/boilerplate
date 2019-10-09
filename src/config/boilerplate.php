<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy
    |--------------------------------------------------------------------------
    |
    | Set the id of the route node for the privacy policy page.
    | It gets linked in the cookie consent notification.
    |
    */
    'privacy_policy_node' => 'privacy-policy',

    /*
    |--------------------------------------------------------------------------
    | Google Tag Manager ID (aka Container ID)
    |--------------------------------------------------------------------------
    |
    | Set the Google Tag Manager ID.
    |
    */
    'google_tag_manager_id' => env('GOOGLE_TAG_MANAGER_ID', null),

    /*
    |--------------------------------------------------------------------------
    | Redirect non-www. Domains.
    |--------------------------------------------------------------------------
    |
    | Redirect requests to non www.* URLs to www.*.
    |
    */
    'redirect_non_www_domain' => env('REDIRECT_NON_WWW_DOMAIN', false),

];
