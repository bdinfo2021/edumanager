<header class="header header-blog">
    <div class="container">
        <a href="{{route('/')}}">
            <img src="{{asset('/')}}front/images/logo.png" alt="LOGO" width="160" height="78"/>
            {{--<span class="text">Aamra</span>--}}
        </a>
        <nav class="main-nav navbar blog-nav navbar-right navbar-light navbar-expand-md" role="navigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar-collapse" class="navbar-collapse collapse">

                {{--<div class="searchbox-container">--}}
                    {{--<form class="searchbox">--}}
                        {{--<label class="sr-only" for="search-form">Search</label>--}}
                        {{--<input id="search-form" class="form-control searchbox-input" placeholder="Search the blog..." type="search" value="" name="search-form">--}}
                        {{--<input class="searchbox-submit" type="submit" value="GO">--}}
                        {{--<i class="fa fa-search searchbox-icon"></i>--}}
                    {{--</form>--}}
                {{--</div><!--//searchbox-container-->--}}

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Clients <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('/clients')}}">Manage Clients</a>
                        </div>
                    </li><!--//dropdown-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">

                        @guest
                        <a class="dropdown-item" href="{{ route('login') }}"><i class="fa fa-caret-right"></i>Login</a>
                        <a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-caret-right"></i>Register</a>
                        @else
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <i class="fa fa-caret-right"></i> Logout</a>

                            @endguest
                        </div>
                    </li><!--//dropdown-->
                    <li class="nav-item nav-item-main-site last"><a class="nav-link" href="{{route('/')}}"><i class="fa fa-home"></i> Back to main site</a></li>
                </ul><!--//nav-->



            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header-->