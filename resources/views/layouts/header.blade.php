<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                    <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset("assets/images/logo-icon.png")}}" alt=""/>{{config('app.name')}}</a>
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
                            <li class="nav-item {{is_active('welcome')}}">
                                <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{is_active('about')}}">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item {{is_active('services')}}">
                                <a class="nav-link" href="{{route('services')}}">Services</a>
                            </li>
                            <li class="nav-item {{is_active('courses')}}">
                                <a class="nav-link" href="{{route('courses')}}">Courses</a>
                            </li>
                            <li class="nav-item {{is_active('contact')}}">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                        <div class="form-inline ml-lg-3">
                            @guest
                            <a href="{{route('login')}}" class="btn btn-primary theme-button">Login</a>
                            @else
                            <a href="{{route('dashboard')}}" class="btn btn-primary theme-button">Dashboard</a>
                            @endguest
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
