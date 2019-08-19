<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @php($routeNode = route_tree()->getCurrentNode())
    <title>{{$routeNode->getData('documentTitle')}}</title>
    <meta name="description" content="{{$routeNode->getData('metaDescription')}}">

    <meta charset="utf-8">

    <meta name="robots" content="noindex,nofollow" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <meta name="environment" content="{{app()->environment()}}">
    <meta name="static" content="{{ config('static-routes.is_generating', false) ? 'true' : 'false' }}">

    <meta name="csrf-token" content="undefined">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=5.0, shrink-to-fit=no'
          name='viewport'/>

    <link type="text/css" rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>

<body class="{{$routeNode->getData('bodyClass')}}">

@include('webflorist-boilerplate::material-kit._partials.main-nav')

@include('webflorist-boilerplate::material-kit._partials.header')

@include('webflorist-boilerplate::material-kit._partials.main')

@include('webflorist-boilerplate::material-kit._partials.footer')

@include('webflorist-boilerplate::cookie-consent')

<script src="{{ mix('/js/app.js') }}"></script>

{{$scripts}}

</body>

</html>
