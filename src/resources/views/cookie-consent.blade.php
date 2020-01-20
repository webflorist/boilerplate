<div class="container-fluid cookiealert">
    <div class="row justify-content-center mb-0">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 px-0">

            <div class="card justify-content-center mb-n1" role="alert">
                <h2 class="card-header bg-info text-white h6 media">
                    <i class="fas fa-info-circle align-self-center mr-3"></i>
                    <div class="media-body">
                        {{ trans('webflorist-boilerplate::cookie-consent.header') }}
                    </div>
                </h2>

                <div class="card-body">
                    <h3 class="h6 card-title mb-3 opacity-75">
                        {{ trans('webflorist-boilerplate::cookie-consent.question') }}
                    </h3>
                    <div class="row">

                        <p class="col opacity-75">
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
    </div>
</div>
