@extends('front.master')
@section('body')
    <div class="headline-bg contact-headline-bg">
    </div><!--//headline-bg-->


    <!-- ******Contact Section****** -->
    <section class="contact-section section section-on-bg">
        <div class="container">
            <h2 class="title text-center">Contact Us</h2>
            <p class="intro text-center">Use this form to send us a message:</p>
            <form id="contact-form" class="contact-form" method="post" action="#">
                <div class="row text-center">
                    <div class="contact-form-inner mr-lg-auto ml-lg-auto col-12 col-lg-8">
                        <div class="row">

                            <div class="form-group col-12 col-sm-6">
                                <label class="sr-only" for="cname">Your name</label>
                                <input type="text" class="form-control" id="cname" name="name" placeholder="Your name"
                                       minlength="2" required>
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label class="sr-only" for="cemail">Email address</label>
                                <input type="email" class="form-control" id="cemail" name="email"
                                       placeholder="Your email address" required>
                            </div>
                            <div class="form-group col-12">
                                <label class="sr-only" for="cmessage">Your message</label>
                                <textarea class="form-control" id="cmessage" name="message"
                                          placeholder="Enter your message" rows="12" required></textarea>
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message
                                </button>
                            </div>
                        </div><!--//row-->
                    </div>
                </div><!--//row-->
                <div id="form-messages"></div>
            </form><!--//contact-form-->
        </div><!--//container-->
    </section><!--//contact-section-->

    <!-- ******Other Contact Section****** -->
    <section class="contact-other-section section">
        <div class="container text-center">
            <h2 class="title">Other ways to reach us</h2>
            <p class="intro">Get in touch with us.</p>
            <div class="row">
                <ul class="other-info list-unstyled col-md-6 col-sm-10 col-12 mr-sm-auto ml-sm-auto">
                    <li><i class="fa fa-envelope-o"></i><a href="#">sales.infotainment@aamra.com.bd</a></li>
                    <li><i class="fa fa-twitter"></i><a href="https://twitter.com/aamracompanies"
                                                        target="_blank">@aamracompanies</a></li>
                    <li><i class="fa fa-fax"></i><a href="tel:+88-02-9840077" target="_blank">+88-02-9840077</a></li>
                    <li><i class="fa fa-phone"></i><a href="tel:+88 01712 126874">+88 01712 126874 or +88 01913
                            397419 </a></li>
                    <li><i class="fa fa-map-marker"></i>
                        Safura Tower (16th Floor)<br/>
                        20 Kemal Ataturk Avenue Banani<br/>
                        Dhaka-1213 <br/>
                        Bangladesh
                    </li>
                </ul>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//contact-other-section-->

    <!-- ******Map Section****** -->
    <section class="map-section section">
        <div class="container text-center">
            <h2 class="title">How to find us</h2>
            <p class="intro">Get in touch with us.</p>
            <div class="gmap-wrapper">
                <div class="gmap-wrapper" id="map">
                    <!--//You need to embed your own google map below-->
                    <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79444.64391671501!2d-0.21428374128957384!3d51.51972634746694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876045108e9cad3%3A0x6514817fa6d57c9!2sThe+Web+Kitchen!5e0!3m2!1sen!2suk!4v1469624353093" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.696753028647!2d90.40229474970735!3d23.7938105844923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e687a9ddd%3A0xed5180589c789bc7!2sAamra+Infotainment+Ltd!5e0!3m2!1sen!2sbd!4v1518586831932"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!--//gmap-wrapper-->
            </div><!--//gmap-wrapper-->
        </div><!--//container-->
    </section><!--//map-section-->

    <!-- ******CTA Section****** -->
    <section id="cta-section" class="section cta-section text-center contact-cta-section">
        <div class="container">
            <h2 class="title">Ready to promote your product online?</h2>
            <p class="intro">More than <span class="counting">300,000</span> users are using Aamra</p>
            <p><a class="btn btn-cta btn-cta-primary"
                  href="https://wrapbootstrap.com/theme/Aamra-designed-for-products-WB0N38R04" target="_blank">Get Aamra
                    Now</a></p>
        </div><!--//container-->
    </section><!--//cta-section-->

    </div><!--//wrapper-->
@endsection