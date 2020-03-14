<footer class="footer footer-default">
    <div class="{{($fluidFooter ?? false) ? 'container-fluid px-md-5' : 'container'}}">
        <nav class="float-left">
            <ul>
                @foreach(route_tree()->getRootNode()->getChildNodes() as $routeNode)
                    @if($routeNode->payload->isFooterNavItem)
                        <li>
                            <a href="{{$routeNode->getUrl()}}" title="{{$routeNode->getTitle()}}">
                                {{$routeNode->getNavTitle()}}
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
