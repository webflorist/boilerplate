@component('webflorist-boilerplate::_general.master', [
    'documentTitle' => $documentTitle,
    'favIcons' => $favIcons ?? true
])

    @isset($head)
        @slot('head')
            {{$head}}
        @endslot
    @endisset

    @slot('body')
        @include('webflorist-boilerplate::paper-kit-2._partials.main-nav')
        @include('webflorist-boilerplate::paper-kit-2._partials.header')
        @include('webflorist-boilerplate::paper-kit-2._partials.main')
        @include('webflorist-boilerplate::paper-kit-2._partials.footer')
    @endslot

    @isset($scripts)
        @slot('scripts')
            {{$scripts}}
        @endslot
    @endisset

@endcomponent
