<!-- ******HEADER****** -->
<header id="header" class="header navbar-fixed-top">
    <div class="container">
        {{--<h1 class="logo">--}}
            <a href="{{route('/home')}}">
                <img src="{{asset('/')}}front/images/edu-manager.jpg" alt="LOGO" width="150" height="75"/>
                {{--<span class="text">Aamra</span>--}}
            </a>
        {{--</h1><!--//logo-->--}}
        <nav class="main-nav navbar navbar-right navbar-inverse navbar-expand-md" role="navigation">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Route::currentRouteNamed('/about-us') ? 'active' : '' }} nav-item">
                        <a class="nav-link" href="{{route('/about-us')}}">About Us</a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('/features') ? 'active' : '' }} nav-item">
                        <a class="nav-link" href="{{route('/features')}}">Features</a></li>
                    <li class="{{ Route::currentRouteNamed('/pricing') ? 'active' : '' }} nav-item">
                        <a class="nav-link" href="{{route('/pricing')}}">Pricing</a></li>
                    <li class="{{ Route::currentRouteNamed('/contact') ? 'active' : '' }} nav-item">
                        <a class="nav-link" href="{{route('/contact')}}">Contact</a></li>
                    {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Company <i class="fa fa-angle-down"></i></a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right">--}}
                    {{--<a class="dropdown-item" href="{{route('/download-apps')}}">Download Apps</a>--}}
                    {{--<a class="dropdown-item" href="#">Blog</a>--}}
                            <!--<a class="dropdown-item" href="blog-single.html">Blog Single</a>-->
                    <!--<a class="dropdown-item" href="blog-category.html">Blog Category</a>-->
                    {{--<a class="dropdown-item" href="blog-archive.html">Partners</a>--}}
                    {{--<a class="dropdown-item" href="{{route('/about-us')}}">About Us</a>--}}
                    {{--<a class="dropdown-item" href="{{route('/contact')}}">contact</a>--}}
                    {{--</div>--}}
                    {{--</li><!--//dropdown-->--}}
                    {{--<li class="nav-item"><a class="nav-link" href="login.html">Log in</a></li>--}}
                    <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary"
                                                              href="{{route('/sign-up')}}">Sign Up Free</a></li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header-->
