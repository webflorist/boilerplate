<div class="alert alert-dismissible text-center cookiealert" role="alert">
    {{ trans('webflorist-boilerplate::cookie-consent.text') }} <a href="{{route_node_url(config('boilerplate.privacy_policy_node'))}}">{{ trans('webflorist-boilerplate::cookie-consent.more_info') }}</a>
    <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="OK">OK</button>
</div>
