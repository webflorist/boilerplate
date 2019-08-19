@if($showHeader ?? true)
    <header class="page-header @if($smallHeader ?? false) page-header-xs @endisset" data-parallax="true"
            style="background-image: url('{{route_tree()->getCurrentNode()->getData('headerImage')}}');">
        <div class="filter"></div>
        <div class="filter"></div>
        {{$headerContent}}
    </header>
@endif
