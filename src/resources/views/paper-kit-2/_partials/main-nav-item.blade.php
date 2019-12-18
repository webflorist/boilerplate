@if($routeNode->hasChildNodes())
    <li class="dropdown nav-item">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            {{$routeNode->getTitle()}}
        </a>
        <div class="dropdown-menu dropdown-with-icons">
            <a href="../presentation.html" class="dropdown-item">
                <i class="material-icons">layers</i> Presentation
            </a>
            <a href="../index.html" class="dropdown-item">
                <i class="material-icons">line_style</i> All Components
            </a>
            <a href="http://demos.creative-tim.com/paper-kit-pro/docs/2.1/getting-started/introduction.html"
               class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
            </a>
        </div>
    </li>
@else
    <li class="nav-item">
        <a href="{{$routeNode->getUrl()}}" class="nav-link" data-toggle="tooltip" title="{{$routeNode->getTitle()}}">
            {{$routeNode->getNavTitle()}}
        </a>
    </li>
@endif
