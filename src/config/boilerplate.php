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
    | Privacy Contact E-Mail
    |--------------------------------------------------------------------------
    |
    | Set the mail-address linked in the privacy policy.
    |
    */
    'privacy_email' => env('MAIL_FROM_ADDRESS', 'privacy@example.com'),

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
    | Google Analytics Tracking ID
    |--------------------------------------------------------------------------
    |
    | Set the Google Analytics Tracking ID.
    |
    */
    'google_analytics_tracking_id' => env('GOOGLE_ANALYTICS_TRACKING_ID', null),


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
