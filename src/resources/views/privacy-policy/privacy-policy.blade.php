@component('templates.page')

    @slot('mainContent')
        <section class="section section-white bg-gradient">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-md-10">

                        {!! __('webflorist-boilerplate::privacy-policy.intro') !!}

                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.rights_header') !!}</h2>

                        {!! __('webflorist-boilerplate::privacy-policy.rights') !!}

                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.security_header') !!}</h2>

                        {!! __('webflorist-boilerplate::privacy-policy.security') !!}

                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.cookies_header') !!}</h2>

                        {!! __('webflorist-boilerplate::privacy-policy.cookies') !!}

                        <p>
                            {!! __('webflorist-boilerplate::privacy-policy.first_party_cookies_intro') !!}
                        </p>

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_name')}}</th>
                                    <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_purpose')}}</th>
                                    <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_written_on')}}</th>
                                    <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_duration')}}</th>
                                </tr>
                                @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
                                    'name' => config('session.cookie'),
                                    'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_session'),
                                    'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_every_visit'),
                                    'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_end_of_session'),
                                ])
                                @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
                                    'name' => 'acceptTestPhase',
                                    'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_accept_test_phase'),
                                    'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_test_phase'),
                                    'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_1_year'),
                                ])
                                @include('webflorist-boilerplate::privacy-policy._partials.first_party_cookie', [
                                    'name' => 'acceptCookies',
                                    'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_accept_cookies'),
                                    'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_cookies'),
                                    'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_1_year'),
                                ])
                            </thead>

                        </table>

                        <p>
                            {!! __('webflorist-boilerplate::privacy-policy.third_party_cookies_intro') !!}
                        </p>

                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_name')}}</th>
                                <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_purpose')}}</th>
                                <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_origin')}}</th>
                                <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_written_on')}}</th>
                                <th scope="col">{{__('webflorist-boilerplate::privacy-policy.cookie_duration')}}</th>
                            </tr>
                            @include('webflorist-boilerplate::privacy-policy._partials.third_party_cookie', [
                                'name' => '_ga<br>_gat<br>_gid',
                                'purpose' => __('webflorist-boilerplate::privacy-policy.cookie_purpose_google_analytics'),
                                'origin' => __('webflorist-boilerplate::privacy-policy.cookie_origin_google_analytics'),
                                'written_on' => __('webflorist-boilerplate::privacy-policy.cookie_written_on_accept_corresponding_cookies'),
                                'duration' => __('webflorist-boilerplate::privacy-policy.cookie_duration_2_years').'<br>'.__('webflorist-boilerplate::privacy-policy.cookie_duration_24_hours').'<br>'.__('webflorist-boilerplate::privacy-policy.cookie_duration_1_minute'),
                            ])
                            </thead>

                        </table>

                        <p>
                            {!! __('webflorist-boilerplate::privacy-policy.cookie_settings_intro') !!}
                        </p>

                        @include('webflorist-boilerplate::privacy-policy._partials.cookie-settings')

                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.data_collection_and_usage_header') !!}</h2>

                        <h3 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.log_data_header') !!}</h3>

                        {!! __('webflorist-boilerplate::privacy-policy.log_data') !!}

                        <h3 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.website_analytics_header') !!}</h3>

                        {!! __('webflorist-boilerplate::privacy-policy.website_analytics') !!}

                        <h3 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.contact_form_header') !!}</h3>

                        {!! __('webflorist-boilerplate::privacy-policy.contact_form') !!}

                        <h3 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.user_accounts_header') !!}</h3>

                        {!! __('webflorist-boilerplate::privacy-policy.user_accounts') !!}

                        <h3 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.subscription_and_payment_header') !!}</h3>

                        {!! __('webflorist-boilerplate::privacy-policy.subscription_and_payment') !!}

                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.outgoing_links_header') !!}</h2>

                        {!! __('webflorist-boilerplate::privacy-policy.outgoing_links') !!}

                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.childrens_privacy_header') !!}</h2>

                        {!! __('webflorist-boilerplate::privacy-policy.childrens_privacy') !!}


                        <h2 class="mt-4">{!! __('webflorist-boilerplate::privacy-policy.subprocessors_header') !!}</h2>

                        <ul>
                            @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
                                'company' => 'Google Ireland Limited',
                                'address' => 'Gordon House, Barrow Street, Dublin 4, Ireland, EU',
                                'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_google'),
                                'categories' => [
                                    __('webflorist-boilerplate::privacy-policy.data_category.inventory_data'),
                                    __('webflorist-boilerplate::privacy-policy.data_category.usage_data'),
                                    __('webflorist-boilerplate::privacy-policy.data_category.usage_statistics')
                                ],
                                'privacy_policy' => 'https://policies.google.com/privacy'
                            ])
                            @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
                                'company' => 'Twilio Sendgrid Inc.',
                                'address' => '1801 California St #500 Denver, CO 80202, USA',
                                'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_send_emails'),
                                'categories' => [
                                    __('webflorist-boilerplate::privacy-policy.data_category.inventory_data'),
                                    __('webflorist-boilerplate::privacy-policy.data_category.contract_data')
                                ],
                                'privacy_policy' => 'https://www.twilio.com/legal/privacy'
                            ])
                            @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
                                'company' => 'Chargebee Inc.',
                                'address' => '340 S Lemon Avenue, #1537, Walnut, California 91789, USA',
                                'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_chargebee'),
                                'categories' => [
                                    __('webflorist-boilerplate::privacy-policy.data_category.inventory_data'),
                                    __('webflorist-boilerplate::privacy-policy.data_category.contract_data'),
                                    __('webflorist-boilerplate::privacy-policy.data_category.payment_data')
                                ],
                                'privacy_policy' => 'https://www.chargebee.com/privacy/'
                            ])
                            @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
                                'company' => 'PayPal (Europe) S.a.r.l. et Cie',
                                'address' => 'S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg, EU',
                                'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_paypal'),
                                'categories' => [
                                    __('webflorist-boilerplate::privacy-policy.data_category.payment_data')
                                ],
                                'privacy_policy' => 'https://www.paypal.com/va/webapps/mpp/ua/privacy-full'
                            ])
                            @include('webflorist-boilerplate::privacy-policy._partials.subprocessor', [
                                'company' => 'Stripe Inc.',
                                'address' => '185 Berry Street, Suite 550, San Francisco, CA 94107, USA',
                                'purpose' => __('webflorist-boilerplate::privacy-policy.data_purpose_stripe'),
                                'categories' => [
                                    __('webflorist-boilerplate::privacy-policy.data_category.payment_data')
                                ],
                                'privacy_policy' => 'https://stripe.com/at/privacy'
                            ])
                        </ul>


                    </div>
                </div>
            </div>
        </section>
    @endslot

    @slot('scripts')
        <script>
            new Vue({
                el: '#appCookieSettings',
                data: {
                    currentSetting: null,
                    icon: null
                },
                methods: {
                    reset: function () {
                        this.deleteCookie('acceptCookies');
                        this.deleteCookie('_ga');
                        this.deleteCookie('_gid');
                        this.deleteCookie('_gat');
                        window.location.reload(true);
                    },
                    getSettingIcon: function (setting) {
                        if (setting === null) {
                            return 'question-circle';
                        }
                        if (setting === 'true') {
                            return 'comment-check';
                        }
                        if (setting === 'false') {
                            return 'comment-slash';
                        }
                    }
                },
                mounted: function () {
                    this.currentSetting = this.getCookie('acceptCookies');
                    this.icon = this.getSettingIcon(this.currentSetting);
                },
                watch:  {
                    currentSetting: function() {
                        this.icon = this.getSettingIcon(this.currentSetting);
                    }
                }
            });
        </script>
    @endslot

@endcomponent
