<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')

<body class="signup-page access-page has-full-screen-bg">
<div class="upper-wrapper">
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            {{--<h1 class="logo">--}}
                <a href="{{route('/home')}}">
                    <img src="{{asset('/')}}front/images/edu-manager.jpg" alt="LOGO" width="150" height="75"/>
                </a>
                {{--<a href="{{route('/home')}}"><span class="logo-icon"></span><span class="text">Aamra</span></a>--}}
            {{--</h1><!--//logo-->--}}

        </div><!--//container-->
    </header><!--//header-->

    <!-- ******Signup Section****** -->
    @include('front.customers.signup-form')
            <!--//signup-section-->
</div><!--//upper-wrapper-->

@extends('front.includes.footer')
@extends('front.includes.scripts')
</body>

</html>

