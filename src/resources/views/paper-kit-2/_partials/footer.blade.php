<footer class="footer footer-default">
    <div class="container">
        <nav class="float-left">
            <ul>
                @foreach(route_tree()->getRootNode()->getChildNodes() as $routeNode)
                    @if($routeNode->payload->isFooterNavItem)
                        <li>
                            <a href="{{$routeNode->getUrl()}}" title="{{$routeNode->payload->getTitle()}}">
                                {{$routeNode->payload->getNavTitle()}}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy; {{date('Y')}} {{$copyright}}
        </div>
    </div>
</footer>
