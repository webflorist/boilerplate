@component('webflorist-boilerplate::material-kit.master', [
    'smallHeader' => false,
    'copyright' => 'webflorist'
])

    @slot('navbarBrand')
        My Awesome Brand
    @endslot

    @slot('navbarNav')
        <ul class="navbar-nav ml-auto">
            @foreach(route_tree()->getRootNode()->getChildNodes() as $routeNode)
                @if($routeNode->payload->isMainNavItem)
                    <li class="nav-item">
                        <a href="{{$routeNode->getUrl()}}" class="nav-link" data-toggle="tooltip"
                           title="{{$routeNode->payload->getTitle()}}">
                            {{$routeNode->payload->getNavTitle()}}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
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
