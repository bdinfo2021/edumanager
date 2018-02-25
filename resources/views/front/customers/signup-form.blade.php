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
                            <form action="{{route('/add-new-customer')}}" class="signup-form" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">First Name</label>
                                    <div class="col-md-9">
                                        <input id="signup-email" name="first_name" type="text" class="form-control"
                                               placeholder="Your First Name">
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Last Name</label>
                                    <div class="col-md-9"><input id="signup-email" type="text" name="last_name"
                                                                 class="form-control" placeholder="Your Last Name">
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Your email</label>
                                    <div class="col-md-9"><input id="signup-email" type="email" name="email_address"
                                                                 class="form-control" placeholder="Your email"></div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Your Mobile Number</label>
                                    <div class="col-md-9"><input id="signup-email" type="text" name="mobile_number"
                                                                 class="form-control" placeholder="Your Mobile Number">
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Address</label>
                                    <div class="col-md-9"><input id="signup-email" type="text" name="location"
                                                                 class="form-control" placeholder="Location"></div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Name of
                                        institution</label>
                                    <div class="col-md-9"><input id="signup-email" type="text"
                                                                 name="name_of_institution" class="form-control"
                                                                 placeholder="Name of institution"></div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-password">Institution
                                        type</label>
                                    <div class="col-md-9">
                                        <select name="institution_type" id="institution_type" class="form-control">
                                            <option value="">-- Select One --</option>
                                            <option value="K-12 School">K-12 School</option>
                                            <option value="Higher Education (Colleges)">Higher Education (Colleges)</option>
                                            <option value="University">University</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    {{--<input id="signup-password" type="password" class="form-control login-password" placeholder="Password">--}}
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Your role in the
                                        Institution</label>
                                    <div class="col-md-9"><input id="signup-email" type="text"
                                                                 name="role_in_institution" class="form-control"
                                                                 placeholder=" e.g.: IT Director, HoD, Principal"></div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Website</label>
                                    <div class="col-md-9"><input id="signup-email" type="url" name="website_link"
                                                                 class="form-control" placeholder="Website Link"></div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signup-email">Message</label>
                                    <div class="col-md-9">
                                    <textarea class="form-control" name="message" id="name_of_institution"
                                              rows="3" placeholder="If you have any specific queries about Fedena">

                                    </textarea></div>
                                </div><!--//form-group-->
                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-3">
                                        <button type="submit" class="btn btn-block btn-cta-primary">Submit</button>
                                    </div>
                                </div>
                                <p class="note">By signing up, you agree to our terms of services and privacy
                                    policy.</p>
                                {{--<p class="lead">Already have an account? <a class="login-link" id="login-link" href="login.html">Log in</a></p>--}}
                            </form>
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