@php
    $locale = null;
    if (config('boilerplate.privacy_policy_en_only')) {
        $locale = 'en';
    }
@endphp

{!! __('webflorist-boilerplate::privacy-policy.intro', [], $locale) !!}

<h2>{!! __('webflorist-boilerplate::privacy-policy.rights_header', [], $locale) !!}</h2>

{!! __('webflorist-boilerplate::privacy-policy.rights', [], $locale) !!}

<h2>{!! __('webflorist-boilerplate::privacy-policy.security_header', [], $locale) !!}</h2>

{!! __('webflorist-boilerplate::privacy-policy.security', [], $locale) !!}

<h2>{!! __('webflorist-boilerplate::privacy-policy.cookies_header', [], $locale) !!}</h2>

{!! __('webflorist-boilerplate::privacy-policy.cookies', [], $locale) !!}

<p>
    {!! __('webflorist-boilerplate::privacy-policy.first_party_cookies_intro', [], $locale) !!}
</p>

<table class="table table-responsive">
    <thead>
    <tr>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_name', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_purpose', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_written_on', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_duration', [], $locale)}}</th>
    </tr>
    </thead>
    <tbody>
    @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
        'name' => config('session.cookie'),
        'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_session', [], $locale),
        'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_every_visit', [], $locale),
        'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_end_of_session', [], $locale),
    ])
    @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
        'name' => 'XSRF-TOKEN',
        'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_xsrf', [], $locale),
        'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_every_visit', [], $locale),
        'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_end_of_session', [], $locale),
    ])
    @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
        'name' => 'hideCookieAlert',
        'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_hide_cookie_alert', [], $locale),
        'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_hide_cookie_alert', [], $locale),
        'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_1_year', [], $locale),
    ])
    @if(config('boilerplate.privacy_policy_google_analytics'))
        @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
            'name' => 'acceptGoogleAnalytics',
            'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_accept_google_analytics', [], $locale),
            'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_google_analytics', [], $locale),
            'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_1_year', [], $locale),
        ])
    @endif
    @if(config('boilerplate.privacy_policy_google_maps'))
        @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
            'name' => 'acceptGoogleMaps',
            'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_accept_google_maps', [], $locale),
            'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_google_maps', [], $locale),
            'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_1_year', [], $locale),
        ])
    @endif
    @if(config('boilerplate.privacy_policy_test_phase'))
        @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
            'name' => 'acceptTestPhase',
            'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_accept_test_phase', [], $locale),
            'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_test_phase', [], $locale),
            'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_1_year', [], $locale),
        ])
    @endif
    </tbody>

</table>

<p>
    {!! __('webflorist-boilerplate::privacy-policy.third_party_cookies_intro', [], $locale) !!}
</p>

<table class="table table-responsive">
    <thead>
    <tr>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_name', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_purpose', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_origin', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_written_on', [], $locale)}}</th>
        <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_duration', [], $locale)}}</th>
    </tr>
    </thead>
    <tbody>
    @if(config('boilerplate.privacy_policy_google_analytics'))
        @include('webflorist-boilerplate::privacy-policy._partials.third_party_cookie', [
            'name' => '_ga<br>_gat<br>_gid',
            'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_google_analytics', [], $locale),
            'origin' => __('webflorist-boilerplate::privacy-policy.cookie_origin_google_analytics', [], $locale),
            'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_corresponding_cookies', [], $locale),
            'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_2_years', [], $locale).'<br>'.__('webflorist-boilerplate::privacy-policy.cookie_duration_24_hours', [], $locale).'<br>'.__('webflorist-boilerplate::privacy-policy.cookie_duration_1_minute', [], $locale),
        ])
    @endif
    @if(config('boilerplate.privacy_policy_google_maps'))
        @include('webflorist-boilerplate::privacy-policy._partials.third_party_cookie', [
            'name' => '-',
            'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_google_maps', [], $locale),
            'origin' => __('webflorist-boilerplate::privacy-policy.cookie_origin_google_maps', [], $locale),
            'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_google_maps', [], $locale),
            'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_various', [], $locale),
        ])
    @endif
    </tbody>

</table>

<p>
    {!! __('webflorist-boilerplate::privacy-policy.cookie_settings_intro', [], $locale) !!}
</p>

@include('webflorist-boilerplate::privacy-policy._partials.cookie-settings')

<h2>{!! __('webflorist-boilerplate::privacy-policy.data_collection_and_usage_header', [], $locale) !!}</h2>

<h3>{!! __('webflorist-boilerplate::privacy-policy.log_data_header', [], $locale) !!}</h3>
{!! __('webflorist-boilerplate::privacy-policy.log_data', [], $locale) !!}

@if(config('boilerplate.privacy_policy_google_analytics'))
    <h3>{!! __('webflorist-boilerplate::privacy-policy.website_analytics_header', [], $locale) !!}</h3>
    {!! __('webflorist-boilerplate::privacy-policy.website_analytics', [], $locale) !!}
@endif

@if(config('boilerplate.privacy_policy_google_maps'))
    <h3>{!! __('webflorist-boilerplate::privacy-policy.google_maps_header', [], $locale) !!}</h3>
    {!! __('webflorist-boilerplate::privacy-policy.google_maps', [], $locale) !!}
@endif

<h3>{!! __('webflorist-boilerplate::privacy-policy.contact_form_header', [], $locale) !!}</h3>
{!! __('webflorist-boilerplate::privacy-policy.contact_form', [], $locale) !!}

@if(config('boilerplate.privacy_policy_user_accounts'))
    <h3>{!! __('webflorist-boilerplate::privacy-policy.user_accounts_header', [], $locale) !!}</h3>
    {!! __('webflorist-boilerplate::privacy-policy.user_accounts', [], $locale) !!}
@endif

@if(config('boilerplate.privacy_policy_subscription_payment'))
    <h3>{!! __('webflorist-boilerplate::privacy-policy.subscription_and_payment_header', [], $locale) !!}</h3>
    {!! __('webflorist-boilerplate::privacy-policy.subscription_and_payment', [], $locale) !!}
@endif

<h2>{!! __('webflorist-boilerplate::privacy-policy.outgoing_links_header', [], $locale) !!}</h2>
{!! __('webflorist-boilerplate::privacy-policy.outgoing_links', [], $locale) !!}

@if(config('boilerplate.privacy_policy_childrens_privacy'))
    <h2>{!! __('webflorist-boilerplate::privacy-policy.childrens_privacy_header', [], $locale) !!}</h2>
    {!! __('webflorist-boilerplate::privacy-policy.childrens_privacy', [], $locale) !!}
@endif

<h2>{!! __('webflorist-boilerplate::privacy-policy.subprocessors_header', [], $locale) !!}</h2>
<ul>
    @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
        'company' => 'Google Ireland Limited',
        'address' => 'Gordon House, Barrow Street, Dublin 4, Ireland, EU',
        'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_google', [], $locale),
        'categories' =>
            array_merge(
                [__('webflorist-boilerplate::privacy-policy.data_category.usage_data', [], $locale)],
                config('boilerplate.privacy_policy_user_accounts') ? [__('webflorist-boilerplate::privacy-policy.data_category.inventory_data', [], $locale)] : [],
                config('boilerplate.privacy_policy_google_analytics') ? [__('webflorist-boilerplate::privacy-policy.data_category.usage_statistics', [], $locale)] : []
            ),
        'privacy_policy' => 'https://policies.google.com/privacy'
    ])
    @if(config('boilerplate.privacy_policy_google_maps'))
        @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
            'company' => 'Google LLC',
            'address' => '1600 Amphitheatre Parkway, Mountain View, CA 94043, USA',
            'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_google_us', [], $locale),
            'categories' => [
                __('webflorist-boilerplate::privacy-policy.data_category.usage_data', [], $locale),
                __('webflorist-boilerplate::privacy-policy.data_category.geo_data', [], $locale)
            ],
            'privacy_policy' => 'https://policies.google.com/privacy'
        ])
    @endif
    @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
        'company' => 'Twilio Sendgrid Inc.',
        'address' => '1801 California St #500 Denver, CO 80202, USA',
        'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_send_emails', [], $locale),
        'categories' => [
            __('webflorist-boilerplate::privacy-policy.data_category.inventory_data', [], $locale),
            __('webflorist-boilerplate::privacy-policy.data_category.contract_data', [], $locale)
        ],
        'privacy_policy' => 'https://www.twilio.com/legal/privacy'
    ])
    @if(config('boilerplate.privacy_policy_subscription_payment'))
        @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
            'company' => 'Chargebee Inc.',
            'address' => '340 S Lemon Avenue, #1537, Walnut, California 91789, USA',
            'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_chargebee', [], $locale),
            'categories' => [
                __('webflorist-boilerplate::privacy-policy.data_category.inventory_data', [], $locale),
                __('webflorist-boilerplate::privacy-policy.data_category.contract_data', [], $locale),
                __('webflorist-boilerplate::privacy-policy.data_category.payment_data', [], $locale)
            ],
            'privacy_policy' => 'https://www.chargebee.com/privacy/'
        ])
        @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
            'company' => 'PayPal (Europe) S.a.r.l. et Cie',
            'address' => 'S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg, EU',
            'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_paypal', [], $locale),
            'categories' => [
                __('webflorist-boilerplate::privacy-policy.data_category.payment_data', [], $locale)
            ],
            'privacy_policy' => 'https://www.paypal.com/va/webapps/mpp/ua/privacy-full'
        ])
        @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
            'company' => 'Stripe Inc.',
            'address' => '185 Berry Street, Suite 550, San Francisco, CA 94107, USA',
            'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_stripe', [], $locale),
            'categories' => [
                __('webflorist-boilerplate::privacy-policy.data_category.payment_data', [], $locale)
            ],
            'privacy_policy' => 'https://stripe.com/at/privacy'
        ])
    @endif
</ul>
