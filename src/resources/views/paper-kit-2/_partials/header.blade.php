@if($showHeader ?? true)
    <header class="page-header @isset($headerSize) page-header-{{$headerSize}} @endisset" data-parallax="true"
            style="background-image: url('{{$headerImage}}');">
        {{$headerContent}}
    </header>
@endif
