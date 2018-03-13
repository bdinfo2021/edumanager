@extends('front.customers.master')
@section('body')
<!-- ******Login Section****** -->
<section class="login-section access-section section">
    <div class="container">
        <div class="row">
            <div class="form-box ml-lg-auto mr-lg-auto col-12 col-lg-10">
                <div class="form-box-inner">
                    <h2 class="title text-center">Log in to Aamra EduManager</h2>
                    @if(Session::get('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Sorry!</strong> {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="form-container col-12 col-lg-12">
                            <form action="{{route('/customer-sign-in')}}" class="login-form" method="POST">
                                {{csrf_field()}}
                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Email or username</label>
                                    <input id="login-email" type="email" name="email" class="form-control login-email" placeholder="Email or username">
                                </div><!--//form-group-->
                                <div class="form-group password">
                                    <label class="sr-only" for="login-password">Password</label>
                                    <input id="login-password" type="password" name="password" class="form-control login-password" placeholder="Password">
                                    {{--<p class="forgot-password"><a href="reset-password.html">Forgot password?</a></p>--}}
                                </div><!--//form-group-->
                                <button type="submit" class="btn btn-block btn-cta-primary">Log in</button>
                                <div class="checkbox remember">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div><!--//checkbox-->
                                <p class="lead">Don't have a Aamra account yet? <br /><a class="signup-link" href="{{route('/customer-sign-up')}}">Create your account now</a></p>
                            </form>
                        </div><!--//form-container-->
                        {{--<div class="social-btns ml-lg-auto mr-lg-auto col-12 col-lg-5">--}}
                            {{--<div class="divider"><span>Or</span></div>--}}
                            {{--<ul class="list-unstyled social-login">--}}
                                {{--<li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Log in with Twitter</button></li>--}}
                                {{--<li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Log in with Facebook</button></li>--}}
                                {{--<li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Log in with Github</button></li>--}}
                                {{--<li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Log in with Google</button></li>--}}
                            {{--</ul>--}}
                        {{--</div><!--//social-btns-->--}}
                    </div><!--//row-->
                </div><!--//form-box-inner-->
            </div><!--//form-box-->
        </div><!--//row-->
    </div><!--//container-->
</section><!--//contact-section-->
@endsection
@section('scripts')
            <!-- contact page specific js starts -->
    <script type="text/javascript" src="{{asset('/')}}front/plugins/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}front/js/sign-up.js"></script>
    <!-- contact page specific js ends-->
    {{--<script !src="">--}}
    {{--@if(Session::get('message'))--}}
    {{--$('#myModal').modal()--}}
    {{--@endif--}}
    {{--</script>--}}
@endsection