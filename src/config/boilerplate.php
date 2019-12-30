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
    | Media Base Path
    |--------------------------------------------------------------------------
    |
    | Set the base path of media from spatie/medialibrary
    |
    */
    'media_base_path' => env('MEDIA_BASE_PATH', 'media')

];
