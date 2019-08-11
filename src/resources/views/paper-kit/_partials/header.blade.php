<header class="page-header @if($smallHeader ?? false) page-header-small @endisset" data-parallax="true"
        style="background-image: url('{{route_tree()->getCurrentNode()->getData('headerImage')}}');">
    <div class="filter"></div>
    {{$headerContent}}
</header>
