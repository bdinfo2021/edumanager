@extends('front.master')
@section('body')
    <div class="headline-bg">
    </div><!--//headline-bg-->

    <!-- ******Apps Section****** -->
    <section class="apps-section section section-on-bg">
        <div class="container">
            <div class="row">
                <div class="content-area order-md-12 order-sm-1 col-12 col-md-6 mr-md-auto">
                    <div class="download-area">
                        <h2 class="title">Get connected anytime, anywhere</h2>
                        <p class="intro">Download our app for your mobile devices</p>
                        <ul class="list-unstyled download-list">
                            <li><a class="btn btn-ghost" href="#"><i class="fa fa-apple"></i><span class="text">Download for iOS</span>
                                </a></li>
                            <li><a class="btn btn-ghost" href="#"><i class="fa fa-android"></i><span class="text">Download for Android</span></a>
                            </li>
                            <li><a class="btn btn-ghost" href="#"><i class="fa fa-windows"></i><span class="text">Windows coming soon...</span></a>
                            </li>
                        </ul>
                        <!--//Only show QR code on desktop -->
                        <div class="qrcode-holder d-none d-lg-block text-center">
                            <figure class="qrcode">
                                <img class="img-fluid" src="{{asset('/')}}front/images/mobile/QR-code.png" alt="QR code"/>
                                <figcaption class="caption">Scan the QR code<br/> to download</figcaption>
                            </figure><!--//qrcode-->
                        </div>
                    </div><!--//download-area-->
                    <div class="info">
                        <div class="info-inner">
                            <h3 class="title"><i class="fa fa-bullhorn"></i> Annoucement</h3>
                            <p>Any app related updates can go into this area. Example - We are going to release our app
                                for Windows phone on 23rd Jan 2015.</p>
                            <p>You can <a href="http://www.appqr.mobi/" target="_blank">generate a single QR code</a>
                                for your app download. Magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                                felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                enim. Donec pede justo, fringilla vel, aliquet nec.</p>

                        </div>
                    </div>
                </div><!--//content-area-->
                <div class="phone-holder-wrapper order-md-1 order-sm-12 col-lg-4 col-md-5 col-12 ml-md-auto">
                    <div class="phone-holder">
                        <img class="screenshot" src="{{asset('/')}}front/images/mobile/screenshot.png" alt=""/>
                    </div><!--//phone-holder-->
                </div><!--//phone-holder-wrapper-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//feature-video-->
@endsection