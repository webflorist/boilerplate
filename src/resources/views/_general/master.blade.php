<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">

    @if(!is_null(config('boilerplate.google_tag_manager_id')))
    <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{config('boilerplate.google_tag_manager_id')}}');
        </script>
        <!-- End Google Tag Manager -->
    @endisset

    <script>
        function initGoogleAnalytics(){
            @if(!is_null(config('boilerplate.google_analytics_tracking_id')))
                window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
                ga('create', '{{config('boilerplate.google_analytics_tracking_id')}}', 'auto');
                ga('set', 'anonymizeIp', true);
                ga('send', 'pageview');
                var gascript = document.createElement("script");
                gascript.async = true;
                gascript.src = "https://www.google-analytics.com/analytics.js";
                document.getElementsByTagName("head")[0].appendChild(gascript, document.getElementsByTagName("head")[0]);
            @endisset
        }
    </script>

    @php($routeNode = route_tree()->getCurrentNode())
    <title>{{$documentTitle}}</title>
    <meta name="description" content="{{$routeNode->payload->get('description')}}">


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <meta name="environment" content="{{app()->environment()}}">
    <meta name="static" content="{{ config('static-routes.is_generating', false) ? 'true' : 'false' }}">

    <meta name="csrf-token" content="{{ config('static-routes.is_generating', false) ? 'undefined' : csrf_token()  }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <link rel="canonical" href="{{route_node()->getUrl()->absolute(true)}}" />

    <link type="text/css" rel="stylesheet" href="{{ mix('/css/app.css') }}">

    @isset($head)
        {{$head}}
    @endisset

</head>

<body class="{{$routeNode->payload->get('bodyClass')}}">

@if(!is_null(config('boilerplate.google_tag_manager_id')))
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{config('boilerplate.google_tag_manager_id')}}"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

{{$body}}

@include('webflorist-boilerplate::cookie-consent')

<script src="{{ mix('/js/app.js') }}"></script>

@isset($scripts)
    {{$scripts}}
@endisset

<script>
    {!! Form::generateVueInstances() !!}
</script>

</body>

</html>
