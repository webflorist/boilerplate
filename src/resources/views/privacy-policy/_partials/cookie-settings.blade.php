<div class="flex d-flex justify-center mb-3">
    <div class="card d-inline-block inline-block">
        <h2 class="card-header text-white bg-info h6 flex">
            <i class="fas fa-info-circle align-self-center mr-3"></i>
            <div>
                {{ trans('webflorist-boilerplate::privacy-policy.cookie_settings_header', [], $locale) }}
            </div>
        </h2>
        <div class="card-body" id="appCookieSettings">
            <template>
                <div class="d-flex flex items-center align-items-center">
                    <i class="fad fa-2x mr-3" :class="'fa-'+getSettingIcon(acceptCookies)"></i>
                    <div v-if="acceptCookies === null">
                        {{ trans('webflorist-boilerplate::privacy-policy.no_cookie_setting', [], $locale) }}
                    </div>
                    <div v-if="acceptCookies === 'true'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_true', [], $locale) }}
                    </div>
                    <div v-if="acceptCookies === 'false'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_false', [], $locale) }}
                    </div>
                </div>

                <div v-if="acceptGoogleMaps === 'true'" class="d-flex flex items-center align-items-center">
                    <i class="fad fa-2x mr-3" :class="'fa-'+getSettingIcon('true')"></i>
                    <div>
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_google_maps', [], $locale) }}
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button v-if="acceptCookies !== null || acceptGoogleMaps !== null"
                            class="btn btn-secondary btn-sm"
                            @click="reset()">
                        <i class="fa fa-undo mr-3"></i>
                        {{ trans('webflorist-boilerplate::privacy-policy.reset_cookie_setting', [], $locale) }}
                    </button>
                </div>

            </template>
        </div>
    </div>

</div>
