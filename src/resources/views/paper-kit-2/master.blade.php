@component('webflorist-boilerplate::_general.master')

    @slot('head')
        {{$head}}
    @endslot

    @slot('body')
        @include('webflorist-boilerplate::paper-kit-2._partials.main-nav')
        @include('webflorist-boilerplate::paper-kit-2._partials.header')
        @include('webflorist-boilerplate::paper-kit-2._partials.main')
        @include('webflorist-boilerplate::paper-kit-2._partials.footer')
    @endslot

@endcomponent
