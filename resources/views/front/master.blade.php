<!DOCTYPE html>
<html lang="en">
    @include('front.includes.head')

    <body class="home-page">
        @include('front.includes.header')

        @yield('body')

        @include('front.includes.footer')
        @include('front.includes.modal')
        @include('front.includes.scripts')
    </body>

</html>

