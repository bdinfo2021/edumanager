<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')

<body
        @unless(empty($body_class))
            class="{{$body_class}}"
        @endunless
>
<div class="wrapper">
    @include('admin.includes.header', ['header_class' => 'header header-blog'])

    @yield('body')
</div><!--//wrapper-->

@include('admin.includes.footer')
@include('front.includes.modal')
@include('front.includes.scripts')

@yield('scripts')
</body>

</html>

