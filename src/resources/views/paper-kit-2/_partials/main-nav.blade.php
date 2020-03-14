<nav class="navbar {{($collapseNavbar ?? true) ? 'navbar-expand-lg' : 'navbar-expand'}} navbar-color-on-scroll navbar-transparent fixed-top" color-on-scroll="20"
     id="sectionsNav">
    <div class="{{($fluidNavbar ?? false) ? 'container-fluid px-md-5' : 'container'}}">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{route_node_url('')}}" title="Home">
                {{$navbarBrand}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="{{($collapseNavbar ?? true) ? 'collapse navbar-collapse' : ''}}">
            {{$navbarNav}}
        </div>
    </div>
</nav>
