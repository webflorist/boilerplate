<header class="page-header header-filter @if($smallHeader ?? false) header-small @endisset" data-parallax="true"
        style="background-image: url('img/{{route_tree()->getCurrentNode()->getData('headerImage')}}');">
    {{$headerContent}}
</header>
