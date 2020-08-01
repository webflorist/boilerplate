<div class="flex d-flex justify-center mb-3">
    <div class="card d-inline-block inline-block">
        <h2 class="card-header text-white bg-info h6 flex d-flex">
            <div class="w-5 align-self-center mr-3">
                @include('webflorist-boilerplate::svg.fas-info-circle')
            </div>
            <div>
                {{ trans('webflorist-boilerplate::privacy-policy.cookie_settings_header', [], $locale) }}
            </div>
        </h2>
        <div class="card-body" id="appCookieSettings">
            <template>

                <div v-if="noCookieSetting" class="d-flex flex items-center align-items-center my-1">
                    <div class="text-info w-6 align-self-center mr-3">
                        @include('webflorist-boilerplate::svg.fas-question-circle')
                    </div>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.no_cookie_setting', [], $locale) }}
                    </div>
                </div>

                <div v-if="hideCookieAlert === 'true'" class="d-flex flex items-center align-items-center my-1">
                    <div class="text-info w-6 align-self-center mr-3">
                        @include('webflorist-boilerplate::svg.fas-check-circle')
                    </div>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_hide_cookie_alert', [], $locale) }}
                    </div>
                </div>

                <div v-if="acceptGoogleAnalytics !== null" class="d-flex flex items-center align-items-center my-1">
                    <div v-if="acceptGoogleAnalytics === 'true'" class="text-info w-6 align-self-center mr-3">
                        @include('webflorist-boilerplate::svg.fas-check-circle')
                    </div>
                    <div v-if="acceptGoogleAnalytics === 'false'" class="text-info w-6 align-self-center mr-3">
                        @include('webflorist-boilerplate::svg.fas-times-circle')
                    </div>
                    <div v-if="acceptGoogleAnalytics === 'true'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_analytics_true', [], $locale) }}
                    </div>
                    <div v-if="acceptGoogleAnalytics === 'false'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_analytics_false', [], $locale) }}
                    </div>
                </div>

                <div v-if="acceptGoogleMaps === 'true'" class="d-flex flex items-center align-items-center my-1">
                    <div class="text-info w-6 align-self-center mr-3">
                        @include('webflorist-boilerplate::svg.fas-check-circle')
                    </div>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_maps', [], $locale) }}
                    </div>
                </div>

                <div v-if="!noCookieSetting" class="text-center mt-4">
                    <button class="btn btn-secondary btn-sm" @click="reset()">
                        <div class="w-4 mr-3">
                            @include('webflorist-boilerplate::svg.fas-undo')
                        </div>
                        {{ trans('webflorist-boilerplate::privacy-policy.reset_cookie_setting', [], $locale) }}
                    </button>
                </div>

            </template>
        </div>
    </div>

</div>
