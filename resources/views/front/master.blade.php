<!DOCTYPE html>
<html lang="en">
    @include('front.includes.head')

    <body class="home-page">
        @include('front.includes.header')

        @yield('body')

        @extends('front.includes.footer')
        @extends('front.includes.modal')
        @extends('front.includes.scripts')
    </body>

</html>

