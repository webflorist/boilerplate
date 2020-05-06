<div class="flex d-flex justify-center mb-3">
    <div class="card d-inline-block inline-block">
        <h2 class="card-header text-white bg-info h6 flex d-flex">
            <i class="far fa-info-circle align-self-center mr-3"></i>
            <div>
                {{ trans('webflorist-boilerplate::privacy-policy.cookie_settings_header', [], $locale) }}
            </div>
        </h2>
        <div class="card-body" id="appCookieSettings">
            <template>

                <div v-if="noCookieSetting" class="d-flex flex items-center align-items-center">
                    <i class="text-info fas fa-question-circle fa-lg mr-3"></i>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.no_cookie_setting', [], $locale) }}
                    </div>
                </div>

                <div v-if="hideCookieAlert === 'true'" class="d-flex flex items-center align-items-center">
                    <i class="text-info fas fa-lg mr-3" :class="'fa-'+getSettingIcon('true')"></i>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_hide_cookie_alert', [], $locale) }}
                    </div>
                </div>

                <div v-if="acceptGoogleAnalytics !== null" class="d-flex flex items-center align-items-center">
                    <i class="text-info fas fa-lg mr-3" :class="'fa-'+getSettingIcon(acceptGoogleAnalytics)"></i>
                    <div v-if="acceptGoogleAnalytics === 'true'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_analytics_true', [], $locale) }}
                    </div>
                    <div v-if="acceptGoogleAnalytics === 'false'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_analytics_false', [], $locale) }}
                    </div>
                </div>

                <div v-if="acceptGoogleMaps === 'true'" class="d-flex flex items-center align-items-center">
                    <i class="text-info fas fa-lg mr-3" :class="'fa-'+getSettingIcon('true')"></i>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_maps', [], $locale) }}
                    </div>
                </div>

                <div v-if="!noCookieSetting" class="text-center mt-4">
                    <button class="btn btn-secondary btn-sm" @click="reset()">
                        <i class="far fa-undo mr-3"></i>
                        {{ trans('webflorist-boilerplate::privacy-policy.reset_cookie_setting', [], $locale) }}
                    </button>
                </div>

            </template>
        </div>
    </div>

</div>
