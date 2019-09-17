@if($showHeader ?? true)
    <header class="page-header @isset($headerSize) page-header-{{$headerSize}} @endisset"
            @if($parallaxHeader ?? false) data-parallax="true" @endif
            style="background-image: url('{{$headerImage}}');">
        {{$headerContent}}
    </header>
@endif
