<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')

<body class="home-page">
<div class="wrapper">
    @include('front.includes.header')

    @yield('body')
</div><!--//wrapper-->

@include('front.includes.footer')
@include('front.includes.modal')
@include('front.includes.scripts')

@yield('scripts')
</body>

</html>

