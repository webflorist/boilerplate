@if($showHeader ?? true)
    <header class="page-header @isset($headerSize) page-header-{{$headerSize}} @endisset" data-parallax="true"
            style="background-image: url('{{route_tree()->getCurrentNode()->getData('headerImage')}}');">
        <div class="filter"></div>
        <!--div class="filter"></div-->
        {{$headerContent}}
    </header>
@endif
