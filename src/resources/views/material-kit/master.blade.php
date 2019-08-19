@component('webflorist-boilerplate::_general.master')

    @slot('body')
        @include('webflorist-boilerplate::material-kit._partials.main-nav')
        @include('webflorist-boilerplate::material-kit._partials.header')
        @include('webflorist-boilerplate::material-kit._partials.main')
        @include('webflorist-boilerplate::material-kit._partials.footer')
    @endslot

    @slot('scripts')
        {{$scripts}}
    @endslot

@endcomponent
