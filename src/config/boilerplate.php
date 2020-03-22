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
    | Privacy Policy Singular pronoun
    |--------------------------------------------------------------------------
    |
    | Use singular (e.g. i, me, my) instead of plural (e.g. we, us, our)
    | as personal pronouns within the privacy policy.
    | (Default = false)
    |
    */
    'privacy_policy_singular' => false,

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy Content
    |--------------------------------------------------------------------------
    |
    | Enable/disable certain specific content for the privacy policy.
    |
    */
    'privacy_policy_test_phase' => false,
    'privacy_policy_user_accounts' => false,
    'privacy_policy_subscription_payment' => false,
    'privacy_policy_childrens_privacy' => false,
    'privacy_policy_google_maps' => false,

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy English only
    |--------------------------------------------------------------------------
    |
    | Make the privacy policy english only.
    |
    */
    'privacy_policy_en_only' => false,

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
