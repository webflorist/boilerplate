<div class="container-fluid cookiealert">
    <div class="row justify-content-center mb-0">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 px-0">

            <div class="row alert justify-content-center mb-0" role="alert">

                <p class="col">
                    {{ trans('webflorist-boilerplate::cookie-consent.question') }}
                    {{ trans('webflorist-boilerplate::cookie-consent.help_text') }}
                    {!! trans('webflorist-boilerplate::cookie-consent.link_text', ['url' => route_node_url(config('boilerplate.privacy_policy_node'))]) !!}
                </p>

                <div class="col-auto d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-success acceptcookies m-2 on-hover-icons-magnify" title="{{trans('webflorist-boilerplate::cookie-consent.accept')}}" aria-label="{{trans('webflorist-boilerplate::cookie-consent.accept')}}">
                        <i class="fas fa-check mr-2"></i>
                        {{trans('webflorist-boilerplate::cookie-consent.accept')}}
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm declinecookies m-2" title="{{trans('webflorist-boilerplate::cookie-consent.decline')}}" aria-label="{{trans('webflorist-boilerplate::cookie-consent.decline')}}">{{trans('webflorist-boilerplate::cookie-consent.decline')}}</button>
                </div>

            </div>

        </div>
    </div>
</div>
