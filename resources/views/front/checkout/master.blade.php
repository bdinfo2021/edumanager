<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aamra School ERP</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('/')}}front/images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('/')}}front/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('/')}}front/css/styles.css">
    <!-- lightbox2-master -->
    <link id="theme-style" rel="stylesheet" href="{{asset('/')}}front/plugins/lightbox2-master/css/lightbox.min.css">

    @yield('css')

</head>


<body
        @unless(empty($body_class))
        class="{{$body_class}}"
        @endunless
>
<div class="upper-wrapper">
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            <h1 class="logo">
                <a href="{{URL::to('/')}}">
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

