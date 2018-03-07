@extends('front.customers.signup')
@section('body')
    <section class="signup-section access-section section">
        <div class="container">
            <div class="row">
                <div class="form-box ml-lg-auto mr-lg-auto col-12 col-lg-10">
                    <div class="form-box-inner">
                        <h2 class="title text-center">Sign up now</h2>
                        <p class="intro text-center">It only takes 10 minutes!</p>
                        @if(Session::get('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> {{Session::get('message')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-container col-12 col-md-12 mx-auto">
                                {{Form::open(['route'=>'/add-new-customer','class'=>'signup-form','method'=>'POST','name'=>'registration'])}}
                                <div class="form-group row required">
                                    {{Form::label('first_name','First Name',['class'=>"col-md-3 col-form-label"])}}
                                    <div class="col-md-9">
                                        {{Form::text('first_name','',array('required' => 'required', 'placeholder' => 'Your First Name', 'class' => 'form-control '.$errors->first('first_name','is-invalid')))}}
                                        <div class="invalid-feedback">{{$errors->has('first_name') ? $errors->first('first_name') : ''}}</div>
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row required">
                                    <label class="col-md-3 col-form-label" for="signup-email">Last Name</label>
                                    <div class="col-md-9">
                                        {{Form::text('last_name','',array('required' => 'required', 'placeholder' => 'Your Last Name', 'class' => 'form-control '.$errors->first('last_name','is-invalid')))}}
                                        <div class="invalid-feedback">{{$errors->has('last_name') ? $errors->first('last_name') : ''}}</div>
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row required">
                                    <label class="col-md-3 col-form-label" for="signup-email">Your email</label>
                                    <div class="col-md-9">
                                        {{Form::email('email_address','',array('required' => 'required', 'placeholder' => 'Your Email Address', 'class' => 'form-control '.$errors->first('email_address','is-invalid')))}}
                                        <div class="invalid-feedback">{{$errors->has('email_address') ? $errors->first('email_address') : ''}}</div>
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row required">
                                    <label class="col-md-3 col-form-label" for="signup-email">Your Mobile Number</label>
                                    <div class="col-md-9">
                                        {{Form::text('mobile_number','',array('required' => 'required', 'placeholder' => 'Your Mobile Number', 'class' => 'form-control '.$errors->first('mobile_number','is-invalid')))}}
                                        <div class="invalid-feedback">{{$errors->has('mobile_number') ? $errors->first('mobile_number') : ''}}</div>
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row required">
                                    <label class="col-md-3 col-form-label" for="signup-email">Address</label>
                                    <div class="col-md-9">
                                        {{Form::text('address','',array('required' => 'required', 'placeholder' => 'Your Address', 'class' => 'form-control '.$errors->first('address','is-invalid')))}}
                                        <div class="invalid-feedback">{{$errors->has('address') ? $errors->first('address') : ''}}</div>
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Name of
                                        institution</label>
                                    <div class="col-md-9">
                                        {{Form::text('name_of_institution','',array('placeholder' => 'Name of institution', 'class' => 'form-control'))}}
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-password">Institution
                                        type</label>
                                    <div class="col-md-9">
                                        {{Form::select('institution_type', [
                                                                'K-12 School' => 'K-12 School',
                                                                'Higher Education (Colleges)' => 'Higher Education (Colleges)',
                                                                'University' => 'University',
                                                                'Other' => 'Other'
                                                                ], null, ['placeholder' => '-- Select One --','class'=>"form-control"])}}
                                    </div>
                                    {{--<input id="signup-password" type="password" class="form-control login-password" placeholder="Password">--}}
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Your role in the
                                        Institution</label>
                                    <div class="col-md-9">
                                        {{Form::text('role_in_institution','',array('placeholder' => 'e.g.: IT Director, HoD, Principal', 'class' => 'form-control'))}}
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Website</label>
                                    <div class="col-md-9">
                                        {{Form::url('website_link','',array('placeholder' => 'Website Link', 'class' => 'form-control'))}}
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Message</label>
                                    <div class="col-md-9">
                                        {{Form::textarea('message','',array('placeholder' => 'If you have any specific queries about EduManager', 'class' => 'form-control', 'rows'=> '3'))}}
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-3">
                                        {{Form::submit('Submit',['class'=>"btn btn-block btn-cta-primary"])}}
                                    </div>
                                </div>
                                <p class="note">By signing up, you agree to our terms of services and privacy
                                    policy.</p>
                                {{--<p class="lead">Already have an account? <a class="login-link" id="login-link" href="login.html">Log in</a></p>--}}
                                {{Form::close()}}
                                {{--<form action="{{route('/add-new-customer')}}" class="signup-form" method="post">--}}
                                {{--{{csrf_field()}}--}}
                                {{--</form>--}}
                            </div><!--//form-container-->
                            {{--<div class="social-btns ml-lg-auto mr-lg-auto col-12 col-lg-5">--}}
                            {{--<div class="divider"><span>Or</span></div>--}}
                            {{--<ul class="list-unstyled social-login">--}}
                            {{--<li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Sign up with Twitter</button></li>--}}
                            {{--<li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Sign up with Facebook</button></li>--}}
                            {{--<li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Sign up with Github</button></li>--}}
                            {{--<li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Sign up with Google</button></li>--}}
                            {{--</ul>--}}
                            {{--<p class="note">Don't worry, we won't post anything without your permission.</p>--}}
                            {{--</div>--}}
                                    <!--//social-login-->
                        </div><!--//row-->
                    </div><!--//form-box-inner-->
                </div><!--//form-box-->
            </div><!--//row-->
        </div><!--//container-->
    </section>
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