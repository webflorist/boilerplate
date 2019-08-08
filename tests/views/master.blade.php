@component('webflorist-boilerplate::material-kit.master', [
    'smallHeader' => false,
    'copyright' => 'webflorist',
    'centerNavItems' => true,
    'navbarIcons' => [
        '<a href="#" class="nav-link"><i class="fas fa-globe"></i></a>',
        '<a href="#" class="nav-link"><i class="fas fa-user"></i></a>',
    ]
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
