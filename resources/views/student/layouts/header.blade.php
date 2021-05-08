<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                    <a class="navbar-brand" href="{{route('dashboard 1')}}"><img src="{{asset("assets/images/logo-icon.png")}}" alt=""/>{{config('app.name')}}</a>
                    <!-- if logo is image enable this
                <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{is_active('dashboard')}}">
                                <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle {{strpos(URL::current(),'tests')?'active':''}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tests
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($_types as $t)
                                        <a class="dropdown-item" href="{{route('tests',$t->name)}}">{{ucfirst($t->name)}}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item {{is_active('lead_board')}}">
                                <a class="nav-link" href="{{route('lead_board')}}">LeadBoard</a>
                            </li>
                        </ul>
                        <div class="form-inline ml-lg-3">
                            <a href="{{route('logout')}}" class="btn btn-primary theme-button">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
