<div class="cookiealert">
    <div class="container mx-auto px-5 lg:px-24 xl:px-32">
        <div class="card mb-5 border-info" role="alert">

            <h2 class="card-header text-white bg-info h6 flex">
                <i class="fas fa-info-circle align-self-center mr-3"></i>
                <div>
                    {{ trans('webflorist-boilerplate::cookie-consent.header') }}
                </div>
            </h2>

            <div class="card-body">

                <p class="h6">
                    {{ trans('webflorist-boilerplate::cookie-consent.question') }}
                </p>

                <p>
                    {{ trans('webflorist-boilerplate::cookie-consent.help_text') }}
                    {!! trans('webflorist-boilerplate::cookie-consent.link_text', ['url' => route_node_url(config('boilerplate.privacy_policy_node'))]) !!}
                </p>

                <div class="text-right">
                    <button type="button" class="btn btn-primary acceptcookies m-2" title="{{trans('webflorist-boilerplate::cookie-consent.accept')}}" aria-label="{{trans('webflorist-boilerplate::cookie-consent.accept')}}">
                        <i class="fas fa-check mr-2"></i>
                        {{trans('webflorist-boilerplate::cookie-consent.accept')}}
                    </button>
                    <button type="button" class="btn btn-neutral btn-sm declinecookies m-2" title="{{trans('webflorist-boilerplate::cookie-consent.decline')}}" aria-label="{{trans('webflorist-boilerplate::cookie-consent.decline')}}">{{trans('webflorist-boilerplate::cookie-consent.decline')}}</button>
                </div>

            </div>
        </div>
    </div>
</div>
