<div class="cookiealert">
    <div class="container mx-auto px-5 lg:px-24 xl:px-32">
        <div class="card mb-5 border-info" role="alert">

            <h2 class="card-header text-white bg-info h6 flex d-flex">
                <i class="fas fa-{{config('boilerplate.privacy_policy_google_analytics') ? 'info-circle' : 'shield-check'}} align-self-center"></i>
                <div class="flex-grow flex-grow-1 mx-3">{{ trans('webflorist-boilerplate::cookie-consent.header') }}</div>
                @if(!config('boilerplate.privacy_policy_google_analytics'))
                    <button type="button" class="btn btn-link p-0 m-0 text-white hide-cookie-alert"
                            title="{{trans('webflorist-boilerplate::cookie-consent.hide')}}"
                            aria-label="{{trans('webflorist-boilerplate::cookie-consent.hide')}}">
                            <i class="fas fa-times"></i>
                    </button>
                @endif
            </h2>

            <div class="card-body">

                @if(config('boilerplate.privacy_policy_google_analytics'))

                    <p class="h6">
                        {{ trans('webflorist-boilerplate::cookie-consent.google_analytics_question') }}
                    </p>

                    <p>
                        {{ trans('webflorist-boilerplate::cookie-consent.google_analytics_help_text') }}
                        {!! trans('webflorist-boilerplate::cookie-consent.google_analytics_link_text', ['url' => route_node_url(config('boilerplate.privacy_policy_node'))]) !!}
                    </p>

                    <div class="text-right">
                        <button type="button" class="btn btn-primary accept-google-analytics m-2"
                                title="{{trans('webflorist-boilerplate::cookie-consent.accept')}}"
                                aria-label="{{trans('webflorist-boilerplate::cookie-consent.accept')}}">
                            <i class="fas fa-check mr-2"></i>
                            {{trans('webflorist-boilerplate::cookie-consent.accept')}}
                        </button>
                        <button type="button" class="btn btn-neutral btn-sm decline-google-analytics m-2"
                                title="{{trans('webflorist-boilerplate::cookie-consent.decline')}}"
                                aria-label="{{trans('webflorist-boilerplate::cookie-consent.decline')}}">{{trans('webflorist-boilerplate::cookie-consent.decline')}}</button>
                    </div>

                @else
                    <p>
                        {!! trans('webflorist-boilerplate::cookie-consent.technical_only') !!}
                    </p>
                @endif

            </div>
        </div>
    </div>
</div>
