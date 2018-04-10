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
                    {{Form::open(['route'=>'/save-shipping-info','class'=>'contact-form','method'=>'POST','name'=>'shipping','files' => true])}}
                    <div class="row">
                        <div class="col-md-5 order-md-2 mb-5">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0"><input type="checkbox" disabled="disabled" checked="checked"
                                                                class="product_price" rel="5000"> Signup & Configuration
                                            Fee</h6>
                                        <small>One Time</small>
                                    </div>
                                    <span class="text-success">৳ 5000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><input type="checkbox" disabled="disabled" checked="checked"
                                                                class="product_price" rel={{$package['price']}}> Monthly
                                            Package Fee</h6>
                                        <small class="text-muted">{{$package['name']}}</small>
                                    </div>
                                    <span class="text-muted"> ৳ {{$package['price']}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><input type="checkbox" class="product_price" rel="45000">
                                            Onside Support Fee</h6>
                                        <small class="text-muted">Per Month</small>
                                    </div>
                                    <span class="text-muted">৳ 45,000</span>
                                </li>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (BDT)</span>
                                    <strong> ৳ <span id="order_total"></span></strong>
                                    {{Form::hidden('orderTotal','')}}
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
                            {{--<form class="needs-validation" novalidate="" _lpchecked="1">--}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    {{Form::hidden('customer_id',$customer->id)}}
                                    {{Form::text('first_name',$customer->first_name,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Customer First Name', 'class' => 'form-control'))}}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    {{Form::text('last_name',$customer->last_name,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Customer Last Name', 'class' => 'form-control'))}}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">E-mail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    {{Form::text('email_address',$customer->email_address,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Your Last Name', 'class' => 'form-control'))}}
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="shipping_address">Shipping Address</label>
                                {{Form::text('shippingAddress','',array('id' => 'shipping_address', 'required' => 'required', 'placeholder' => 'Your Address', 'class' => 'form-control '.$errors->first('shipping_address','is-invalid')))}}
                                <div class="invalid-feedback">{{$errors->has('shipping_address') ? $errors->first('shipping_address') : ''}}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3 form-group">
                                    <label for="country">Country</label>
                                    {{Form::select('country', [
                                                                'BD' => 'Bangladesh'
                                                                ], null, ['required' => 'required', 'placeholder' => '-- Choose --','class'=>"form-control custom-select d-block w-100", 'id'=>'country'])}}
                                </div>
                                <div class="col-md-4 mb-3 form-group">
                                    <label for="state">State</label>
                                    {{Form::select('state', [
                                                                'Dhaka' => 'Dhaka'
                                                                ], null, ['placeholder' => '-- Choose --', 'required' => 'required', 'class'=>"form-control custom-select d-block w-100", 'id','state'])}}
                                </div>
                                <div class="col-md-3 mb-3 form-group">
                                    <label for="zip">Zip</label>
                                    {{Form::text('zip','',array('id' => 'zip', 'required' => 'required', 'placeholder' => 'ZIP Code', 'class' => 'form-control'))}}
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same
                                    as my
                                    billing address</label>
                            </div>
                            <hr class="mb-4">

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="bank-payment" name="paymentType" type="radio"
                                           class="custom-control-input" checked=""
                                           required="" value='bank_payment'>
                                    <label class="custom-control-label" for="bank-payment">Bank Payment</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="online-payment" name="paymentType" type="radio"
                                           class="custom-control-input"
                                           required="" value="online_payment">
                                    <label class="custom-control-label" for="online-payment">Online Payment</label>
                                </div>
                            </div>
                            <div id="online-payment-area">
                                <div class="row">
                                    <div class="col-md-12 mb-6 form-group">
                                        <div class="custom-file">
                                            {{Form::file('depositSlip', array('id' => 'deposit_slip', 'required' => 'required', 'accept'=>"image/*", 'class' => 'custom-file-input form-control '.$errors->first('deposit_slip','is-invalid')))}}
                                            <small>
                                                <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                                            </small>
                                            <div class="invalid-feedback">{{$errors->has('deposit_slip') ? $errors->first('deposit_slip') : ''}}</div>
                                            <label class="custom-file-label" for="customFile">Upload Deposit Clip</label>
                                            <br/>
                                            <small class="text-muted">
                                                Please deposite the total amount to:
                                                <br/> Bank: <b>Dutch bangla Bank Ltd.</b>
                                                <br/> A/C No : <b>XXX.XXX.XXXXXX</b>
                                                <br/> & upload the image of the deposit slip
                                                <br/> Type: jpeg | png | jpg | gif | svg
                                                <br/> Maximum Size :5 MB
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="bank-payment-area" style="display: none;">
                                <div class="row">
                                    <div class="col-md-12 mb-6">
                                        <img src="{{asset('/')}}front/images/checkout/online-payment.png"
                                             class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout
                            </button>
                            {{--</form>--}}
                        </div>
                    </div>
                    {{Form::close()}}<!--//contact-form-->

                    {{--<footer class="my-5 pt-5 text-muted text-center text-small">--}}
                    {{--<p class="mb-1">=====================================================</p>--}}
                    {{--<ul class="list-inline">--}}
                    {{--<li class="list-inline-item">----------------------------------------</li>--}}
                    {{--<li class="list-inline-item">----------------------------------------</li>--}}
                    {{--<li class="list-inline-item">----------------------------------------</li>--}}
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
    <script type="text/javascript" src="{{asset('/')}}front/plugins/additional-methods.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}front/js/sign-up.js"></script>
    <script !src="">
        $(document).ready(function () {
            recalculate();
            $(".product_price").change(function () {
                recalculate();
            });
            function recalculate() {
                var orderTotal = 0;
                $(".product_price").each(function () {
                    if ($(this).is(":checked")) // "this" refers to the element that fired the event
                    {
                        orderTotal += parseInt($(this).attr("rel"));
//                    alert($(this).attr("rel"));
                    }
                });
                $('#order_total').html(orderTotal);
                $('input[name=orderTotal]').val(orderTotal);
            }

            $("#same-address").click(function () {
                // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
                if ($(this).is(":checked")) // "this" refers to the element that fired the event
                {
                    $('#shipping_address').val('{{$customer->address}}')
//                alert('home is checked');
                } else {
                    $('#shipping_address').val('')
                }
            });

            $('input[type=radio]').on('change', function () {
                var depositSlipTextfield = '{{Form::file('depositSlip', ['required'=>'required','class'=>'custom-file-input form-control','accept'=>"image/*"])}}';
                if ($('#bank-payment').is(':checked')) {
                    $('#bank-payment-area').hide();
                    $('#online-payment-area').show();
                    $(".custom-file").prepend(depositSlipTextfield);
                } else {
                    $('#bank-payment-area').show();
                    $('#online-payment-area').hide();
                    $('input[name="depositSlip"]').remove();
                }
            });
            $('.custom-file').on('change','input[type="file"]',function(e){
                var fileName = e.target.files[0].name;
                $('.custom-file-label').html(fileName);
            });
        });
    </script>
@endsection