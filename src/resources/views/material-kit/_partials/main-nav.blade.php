<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top  navbar-expand-lg " color-on-scroll="100"
     id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                {{$navbarBrand}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto @if($centerNavItems ?? false) navbar-center @endisset">
                @foreach(route_tree()->getRootNode()->getChildNodes() as $routeNode)
                    @if($routeNode->getData('isMainNavItem'))
                        @include('webflorist-boilerplate::material-kit._partials.main-nav-item', ['routeNode' => $routeNode])
                    @endif
                @endforeach
            </ul>
            @isset($navbarIcons)
                <ul class="navbar-nav ml-auto">
                    @foreach($navbarIcons as $htmlCode)
                        <li class="nav-item">
                            {!! $htmlCode !!}
                        </li>
                    @endforeach
                </ul>
            @endisset
        </div>
    </div>
</nav>
