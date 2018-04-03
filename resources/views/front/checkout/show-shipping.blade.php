@extends('front.checkout.master', ['body_class' => 'signup-page access-page has-full-screen-bg'])
@section('body')
        <!-- ******Login Section****** -->
<section class="signup-section access-section section">
    <div class="container">
        <div class="row">
            <div class="form-box ml-lg-auto mr-lg-auto col-12 col-lg-12">
                <div class="form-box-inner">
                    <h2 class="title text-center">Checkout</h2>
                    @if(Session::get('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Sorry!</strong> {{Session::get('message')}}
                        </div>
                    @endif


                    {{--<div class="py-5 text-center">--}}
                        {{--<h2>Order Checkout</h2>--}}
                        {{--<p class="lead">Please, give the following information.</p>--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-md-5 order-md-2 mb-5">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0"><input type="checkbox" disabled="disabled" checked="checked" class="product_price" rel="5000"> Signup & Configuration Fee</h6>
                                        <small>One Time</small>
                                    </div>
                                    <span class="text-success">৳ 5000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><input type="checkbox" disabled="disabled" checked="checked" class="product_price" rel={{$package['price']}}> Monthly Package Fee</h6>
                                        <small class="text-muted">{{$package['name']}}</small>
                                    </div>
                                    <span class="text-muted"> ৳ {{$package['price']}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><input type="checkbox" class="product_price" rel="45000"> Onside Support Fee</h6>
                                        <small class="text-muted">Per Month</small>
                                    </div>
                                    <span class="text-muted">৳ 45,000</span>
                                </li>
                                {{--<li class="list-group-item d-flex justify-content-between lh-condensed">--}}
                                    {{--<div>--}}
                                        {{--<h6 class="my-0">Onside Support</h6>--}}
                                        {{--<small class="text-muted">Brief description</small>--}}
                                    {{--</div>--}}
                                    {{--<span class="text-muted">৳ 5,000</span>--}}
                                {{--</li>--}}
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (BDT)</span>
                                    <strong> ৳ <span id="total_amount"></span></strong>
                                </li>
                            </ul>

                            {{--<form class="card p-2" _lpchecked="1">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input type="text" class="form-control" placeholder="Promo code">--}}
                                    {{--<div class="input-group-append">--}}
                                        {{--<button type="submit" class="btn btn-secondary">Redeem</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        </div>
                        <div class="col-md-7 order-md-1">
                            <h4 class="mb-3">Billing address</h4>
{{--                            {{Form::open(['route'=>'/save-shipping-info','class'=>'contact-form','method'=>'POST','name'=>'registration'])}}--}}
                            <form class="needs-validation" novalidate="" _lpchecked="1">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First name</label>
                                        {{Form::text('first_name',$customer->first_name,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Customer First Name', 'class' => 'form-control '.$errors->first('first_name','is-invalid')))}}
                                        {{--<input type="text" class="form-control" id="firstName" placeholder="" value=""--}}
                                               {{--required=""--}}
                                               {{--style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">--}}
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name</label>
                                        {{Form::text('last_name',$customer->last_name,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Customer Last Name', 'class' => 'form-control '.$errors->first('first_name','is-invalid')))}}
                                        {{--<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">--}}
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="username">E-mail</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        {{Form::text('email_address',$customer->email_address,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Your Last Name', 'class' => 'form-control '.$errors->first('last_name','is-invalid')))}}
                                        {{--<input type="text" class="form-control" id="username" placeholder="Username" required="">--}}
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Your username is required.
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="mb-3">--}}
                                    {{--<label for="email">Email <span class="text-muted">(Optional)</span></label>--}}
                                    {{--<input type="email" class="form-control" id="email" placeholder="you@example.com">--}}
                                    {{--<div class="invalid-feedback">--}}
                                        {{--Please enter a valid email address for shipping updates.--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="mb-3">
                                    <label for="address">Billing Address</label>
                                    {{Form::text('billing_address','',array('id' => 'billing_address', 'required' => 'required', 'placeholder' => 'Your Address', 'class' => 'form-control '.$errors->first('address','is-invalid')))}}
                                    {{--<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">--}}
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                {{--<div class="mb-3">--}}
                                    {{--<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>--}}
                                    {{--<input type="text" class="form-control" id="address2"--}}
                                           {{--placeholder="Apartment or suite">--}}
                                {{--</div>--}}

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>Bangladesh</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required="">
                                            <option value="">Choose...</option>
                                            <option>Dhaka</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">Shipping address is the same
                                        as my
                                        billing address</label>
                                </div>
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="save-info">--}}
                                    {{--<label class="custom-control-label" for="save-info">Save this information for next--}}
                                        {{--time</label>--}}
                                {{--</div>--}}
                                <hr class="mb-4">

                                <h4 class="mb-3">Payment</h4>

                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="bank-payment" name="paymentMethod" type="radio"
                                               class="custom-control-input" checked=""
                                               required="">
                                        <label class="custom-control-label" for="bank-payment">Bank Payment</label>
                                    </div>
                                    {{--<div class="custom-control custom-radio">--}}
                                        {{--<input id="debit" name="paymentMethod" type="radio" class="custom-control-input"--}}
                                               {{--required="">--}}
                                        {{--<label class="custom-control-label" for="debit">Debit card</label>--}}
                                    {{--</div>--}}
                                    <div class="custom-control custom-radio">
                                        <input id="online-payment" name="paymentMethod" type="radio"
                                               class="custom-control-input"
                                               required="">
                                        <label class="custom-control-label" for="online-payment">Online Payment</label>
                                    </div>
                                </div>
                                <div id="online-payment-area">
                                    <div class="row">
                                        <div class="col-md-12 mb-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Deposit Clip </label>
                                            <small class="text-muted">Please deposite the total amount to: <br/> Bank: <b>Dutch bangla Bank Ltd.</b>
                                                <br/> A/C No : <b>XXX.XXX.XXXXXX</b> <br/> & upload the image of the deposite slip</small>
                                            <div class="invalid-feedback">
                                                Name on card is required
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="bank-payment-area" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-12 mb-6">
                                            <img src="{{asset('/')}}front/images/checkout/online-payment.png" class="img-fluid" alt="Responsive image">
                                        </div>
                                    </div>
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-3 mb-3">--}}
                                            {{--<label for="cc-expiration">Expiration</label>--}}
                                            {{--<input type="text" class="form-control" id="cc-expiration" placeholder=""--}}
                                                   {{--required="">--}}
                                            {{--<div class="invalid-feedback">--}}
                                                {{--Expiration date required--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3 mb-3">--}}
                                            {{--<label for="cc-expiration">CVV</label>--}}
                                            {{--<input type="text" class="form-control" id="cc-cvv" placeholder="" required="">--}}
                                            {{--<div class="invalid-feedback">--}}
                                                {{--Security code required--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout
                                </button>
{{--                                {{Form::close()}}<!--//contact-form-->--}}
                            {{--</form>--}}
                        </div>
                    </div>

                    {{--<footer class="my-5 pt-5 text-muted text-center text-small">--}}
                        {{--<p class="mb-1">© 2017-2018 Company Name</p>--}}
                        {{--<ul class="list-inline">--}}
                            {{--<li class="list-inline-item"><a--}}
                                        {{--href="https://getbootstrap.com/docs/4.0/examples/checkout/#">Privacy</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item"><a--}}
                                        {{--href="https://getbootstrap.com/docs/4.0/examples/checkout/#">Terms</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item"><a--}}
                                        {{--href="https://getbootstrap.com/docs/4.0/examples/checkout/#">Support</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</footer>--}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('css')
    <link id="theme-style" rel="stylesheet" href="{{asset('/')}}front/css/checkout/bootstrap.min.css">
    <link id="theme-style" rel="stylesheet" href="{{asset('/')}}front/css/checkout/form-validation.css">
@endsection
@section('scripts')
            <!-- contact page specific js starts -->
    <script type="text/javascript" src="{{asset('/')}}front/plugins/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}front/js/sign-up.js"></script>
    <script !src="">
        $(document).ready(function() {
            recalculate();
        });
        $("#same-address").click(function() {
            // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
            if($(this).is(":checked")) // "this" refers to the element that fired the event
            {
                $('#billing_address').val('{{$customer->address}}')
//                alert('home is checked');
            }else{
                $('#billing_address').val('')
            }
        });

        $(".product_price").change(function(){
            recalculate();
        });


        function recalculate(){
            var sum = 0;

            $(".product_price").each(function(){
                if($(this).is(":checked")) // "this" refers to the element that fired the event
                {
                    sum += parseInt($(this).attr("rel"));
//                    alert($(this).attr("rel"));
                }
            });
//            alert(sum);
            $('#total_amount').html(sum);
        }

        $('input[type=radio]').on('change',function() {
            if( $('#bank-payment').is(':checked') ) {
                $('#bank-payment-area').hide();
                $('#online-payment-area').show();
            } else {
                $('#bank-payment-area').show();
                $('#online-payment-area').hide();
            }
        });
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });

    </script>
@endsection