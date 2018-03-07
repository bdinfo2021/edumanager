@extends('front.customers.signup')
@section('body')
    <div class="jumbotron text-center mb-0 pb-1" style="box-sizing: border-box;">
        <img src="{{asset('/')}}front/images/sign-up/thankyou.gif">
        <br/>
        <h2 class="">Thank you for signing up for Edumanager demo.</h2>
        <h6>We are processing your sample data. You will receive instructions in your inbox soon.</h6>
        <p class="small-format mt-5"><small>Kindly check your spam/junk folder also. In case of any queries, feel free to write to us at <a href="mailto:info@edumanager.com">info@edumanager.net</a></small></p>
    </div>
@endsection