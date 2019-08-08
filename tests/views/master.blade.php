@component('webflorist-boilerplate::material-kit.master', [
    'smallHeader' => false,
    'copyright' => 'webflorist'
])

    @slot('navbarBrand')
        My Awesome Brand
    @endslot

    @slot('headerContent')
        My Awesome Header Content
    @endslot

    @slot('mainContent')
        My Awesome Main Content
    @endslot

    @slot('scripts')
        <script>
            let $myAwesomeScript = true;
        </script>
    @endslot

@endcomponent
