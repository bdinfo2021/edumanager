<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')

<body class="signup-page access-page has-full-screen-bg">
<div class="upper-wrapper">
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            <h1 class="logo">
                <a href="{{route('/home')}}">
                    <img src="{{asset('/')}}front/images/logo.png" alt="LOGO" width="160" height="78"/>
                </a>
                {{--<a href="{{route('/home')}}"><span class="logo-icon"></span><span class="text">Aamra</span></a>--}}
            </h1><!--//logo-->

        </div><!--//container-->
    </header><!--//header-->

    @yield('body')
    {{--    @include('front.customers.signup-form')--}}
</div><!--//upper-wrapper-->

@include('front.includes.footer')
@include('front.includes.scripts')
@yield('scripts')
</body>

</html>

