<div>
    <div class="card bg-info text-white d-inline-block">
        <h2 class="card-header h6 media">
            <i class="fas fa-info-circle align-self-center mr-3"></i>
            <div class="media-body">
                {{ trans('webflorist-boilerplate::privacy-policy.cookie_settings_header') }}
            </div>
        </h2>
        <div class="card-body" id="appCookieSettings">
            <template>
                <div class="d-flex flex-row justify-content-center align-items-center align-content-center">
                    <i class="fad fa-2x mr-3" :class="'fa-'+icon"></i>
                    <p class="media-body" v-if="currentSetting === null">
                        {{ trans('webflorist-boilerplate::privacy-policy.no_cookie_setting') }}
                    </p>
                    <p class="media-body" v-if="currentSetting === 'true'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_true') }}
                    </p>
                    <p class="media-body" v-if="currentSetting === 'false'">
                        {{ trans('webflorist-boilerplate::privacy-policy.cookie_setting_false') }}
                    </p>
                </div>
                <button v-if="currentSetting !== null"
                        class="btn btn-secondary w-100 btn-sm mt-3"
                        @click="reset()">
                    {{ trans('webflorist-boilerplate::privacy-policy.reset_cookie_setting') }}
                </button>
            </template>
        </div>
    </div>

</div>
