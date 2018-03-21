@extends('front.master', ['body_class' => 'home-page'])
@section('body')
    <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>
                <li class="slide slide-2"></li>
                <li class="slide slide-3"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->

    <section class="promo section section-on-bg">
        <div class="container text-center">
            <h2 class="title">All­-in­-one College and School Management Software</h2>
            <p class="intro">Automate everything, Generate insightful reports, Make better & faster decisions</p>
            <p><a class="btn btn-cta btn-cta-primary" href="{{route('/customer-sign-up')}}">Try Free Demo</a></p>
            <!--<button type="button" class="play-trigger btn-link " data-toggle="modal" data-target="#modal-video" ><i class="fa fa-youtube-play"></i> Watch the video</button>-->
        </div><!--//container-->
    </section><!--//promo-->

    <div class="sections-wrapper">

        <!-- ******Why Section****** -->
        <section id="why" class="section why">
            <div class="container">
                <h2 class="title text-center">How Can Aamra Edumanager Help You?</h2>
                <p class="intro text-center">
                    Aamra EduManager is a complete education institution management ERP System provides user-friendly dashboards with login access for teachers, non-teaching staff, students, parents and management personnel of your institution. The various modules available in Aamra EduManager facilitate all the processes of your institution, from admission of new students to generating transfer certificates when students complete their studies. You can Instantly use it as Monthly Subscription based service by sign-up from below:
                    <br/>

                    <a class="btn btn-default p-0" href="{{route('/customer-sign-up')}}"><img src="{{asset('/')}}front/images/sign-up/sign_up_now.png" alt="" width="140" height="50"></a>
                </p>
                <div class="row item">
                    <div class="content col-12 col-lg-5">
                        <h3 class="title">Ultimate University/College/School ERP Software</h3>
                        <div class="desc">
                            <p>
                                Aamra EduManager has modules to manage Timetable, Attendance, Examinations, Gradebooks, Campus News, Hostel, Library, Transportation, School Calendar, Events and many more. It has a fully-fledged Human Resource module to manage the payroll and employee pay slips. The Finance module helps you to plan and allot different fee structures to students. The set of features includes availability of the various plugins, RFID based SMS notification on student attendance, built-in accounting system or integration of existing accounting system.
                            </p>
                        </div>
                        <!--<div class="quote">-->
                        <!--<div class="quote-profile">-->
                        <!--<img class="img-fluid img-circle" src="{{asset('/')}}front/images/people/profile-s-1.png" alt="" />-->
                        <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                        <!--<div class="quote-content">-->
                        <!--<blockquote><p><a href="https://twitter.com/sanaullaparvez" target="_blank">@Aamra</a> Love it! Thank you for making my life easier and saving me time! I’ll definitely recommend it to my friends. :)</p></blockquote>-->
                        <!--<p class="source">@SanaullaParvez, Bristol</p>-->
                        <!--</div>&lt;!&ndash;//quote-content&ndash;&gt;                                     -->
                        <!--</div>&lt;!&ndash;//quote&ndash;&gt;                        -->
                    </div><!--//content-->
                    <figure class="figure offset-lg-1 col-12 col-lg-6">
                        <a href="{{asset('/')}}front/images/figures/dashboard.png" data-lightbox="dashboard"><img class="img-fluid" src="{{asset('/')}}front/images/figures/dashboard.png" alt="" /></a>
                        {{--<figcaption class="figure-caption">(Screenshot: Dashboard) </figcaption>--}}
                    </figure>
                </div><!--//item-->
                <div class="row item">
                    <div class="content col-12 col-lg-4 order-lg-12">
                        <h3 class="title">Collaboration of 3rd Party Software</h3>
                        <div class="desc">
                            <p>
                                Aamra EduManager System is also an excellent collaboration tool using its Task, Discussion, Poll, Blog and Video conference plugins. It has facilities to integrate the popular accounting software e.g. Tally, Quickbook or any.
                            </p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-12 col-lg-7 order-lg-1">
                        <a href="{{asset('/')}}front/images/figures/software.png" data-lightbox="software"><img class="img-fluid" src="{{asset('/')}}front/images/figures/software.png" alt="" /></a>
                        {{--<figcaption class="figure-caption">(Screenshot: Software) </figcaption>--}}
                    </figure>
                </div><!--//item-->
                <div class="row item">
                    <div class="content col-12 col-lg-4">
                        <h3 class="title">Instant Messaging & Communication</h3>
                        <div class="desc">
                            <p>
                                There is an internal messaging system within Aamra EduManager but you can also integrate it with external communication tools like email and texting. Also Aamra EduManager has RFID based Student Attendance system with SMS Notifications options for the School Management, Teachers & Parents in order to ensure the child security & safety.
                            </p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure offset-lg-1 col-12 col-lg-7">
                        <a href="{{asset('/')}}front/images/figures/message.png" data-lightbox="message"><img class="img-fluid" src="{{asset('/')}}front/images/figures/message.png" alt="" /></a>
                        {{--<figcaption class="figure-caption">(Screenshot: Message) </figcaption>--}}
                    </figure>
                </div><!--//item-->

                <div class="row item">
                    <div class="content col-12 col-lg-7 order-lg-12">
                        <h3 class="title">Works across all devices</h3>
                        <div class="desc">
                            <p>Aamra EduManager Software System is all device compatible and mobile responsive. Besides, web version for Desktop/Laptop Computer, you can avail Android and iOS based Mobile Apps in name of your institute/organization for Parents, Teachers & Students.</p>
                            <p>You can now enjoy the benefit of having a dedicated mobile app in your institution’s name that will communicate with Aamra EduManager Software System and stay connected with everyone, anytime.</p>
                            <p><i class="fa fa-download"></i> <a href="#">Download mobile versions</a></p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-12 col-lg-4 order-lg-1">
                        <a href="{{asset('/')}}front/images/figures/devices.png" data-lightbox="devices"><img class="img-fluid" src="{{asset('/')}}front/images/figures/devices.png" alt="" /></a>
                        <!--<div class="control text-center">-->
                        <!--<button type="button" class="play-trigger" data-toggle="modal" data-target="#modal-video"><i class="fa fa-play"></i></button>                    -->
                        <!--</div>&lt;!&ndash;//control&ndash;&gt;-->
                    </figure>
                </div><!--//item-->

                <!--<div class="row item ">-->
                <!--<div class="content col-12 col-lg-4">-->
                <!--<h3 class="title">Easy to customise</h3>-->
                <!--<div class="desc">-->
                <!--<p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>-->
                <!--<p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>-->
                <!--</div>-->
                <!--<div class="quote">-->
                <!--<div class="quote-profile">-->
                <!--<img class="img-fluid img-circle" src="{{asset('/')}}front/images/people/profile-s-3.png" alt="" />-->
                <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="quote-content">-->
                <!--<blockquote><p>Nice template! It’s practical and there is no gimmicks. Very easy to customise as well!</p></blockquote>-->
                <!--<p class="source"><a href="#">@AlexD</a>, London</p>-->
                <!--</div>&lt;!&ndash;//quote-content&ndash;&gt;          -->
                <!--</div>&lt;!&ndash;//quote&ndash;&gt;                        -->
                <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--<figure class="figure offset-lg-1 col-12 col-lg-7">-->
                <!--<img class="img-fluid" src="{{asset('/')}}front/images/figures/figure-3.png" alt="" />-->
                <!--<figcaption class="figure-caption">(Screenshot: <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/?ref=3wm" target="_blank">Tempo - Bootstrap template for startups)</a> </figcaption>-->

                <!--</figure>-->
                <!--</div>&lt;!&ndash;//item&ndash;&gt;-->

                <div class="row item last-item">
                    <div class="content col-12 col-lg-4">
                        <h3 class="title">Manage your institute from online platform</h3>
                        <div class="desc">
                            <p>Best suited for management of your education Institutions e.g. School, College & University to control single or multiple school or college from online platform. For starting to use the Aamra EduManager Software System, all you need to signup & register your institute name from website and pay Signup Fee and Monthly Subscription Fee. No need to installation, configuration, server & network connection to use aamra EduManager; completely zero-configuration to start.</p>
                        </div>

                        <!--<div class="quote">-->
                        <!--<div class="quote-profile">-->
                        <!--<img class="img-fluid img-circle" src="{{asset('/')}}front/images/people/profile-s-4.png" alt="" />-->
                        <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                        <!--<div class="quote-content">-->
                        <!--<blockquote><p>I can connect to like-minded people lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></blockquote>-->
                        <!--<p class="source">@JackT, San Francisco</p>-->
                        <!--</div>&lt;!&ndash;//quote-content&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;//quote&ndash;&gt;-->
                    </div><!--//content-->
                    <figure class="figure offset-lg-1 col-12 col-lg-7">
                        {{--<a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="example-1"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>--}}
                        <a href="{{asset('/')}}front/images/figures/multischool.png" data-lightbox="Multi School"><img class="img-fluid" src="{{asset('/')}}front/images/figures/multischool.png" alt="" /></a>
                    </figure>
                </div><!--//item-->


                <div class="feature-lead text-center">
                    <h4 class="title">To find out more, take a tour below, try the free demo or contact us.</h4>
                    <p><a class="btn btn-cta btn-cta-secondary" href="{{route('/features')}}">Take a Tour</a></p>
                </div>
            </div><!--//container-->
        </section><!--//why-->

        <!-- ******Testimonials Section****** -->
        <section class="section testimonials">
            <div class="container">
                <h2 class="title text-center">What are people saying about Aamra?</h2>
                <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                    </ol><!--//carousel-indicators-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item item active">
                            <figure class="profile"><img src="{{asset('/')}}front/images/people/principal.jpg" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                    <i class="fa fa-quote-left"></i>
                                    <p>We are satisfactorily using Aamra EduManager School Management System for our School. Aamra EduManager fulfills all our academic requirements within a short period of time.</p>
                                </blockquote>
                                <p class="source">Lubna Choudhury<br /><span class="title">Founder-Principal, Bangladesh International Tutorial</span></p>
                            </div><!--//content-->
                        </div><!--//item-->
                        <!--<div class="carousel-item item">-->
                        <!--<figure class="profile"><img src="{{asset('/')}}front/images/people/profile-m-2.png" alt="" /></figure>-->
                        <!--<div class="content">-->
                        <!--<blockquote>-->
                        <!--<i class="fa fa-quote-left"></i>-->
                        <!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>-->
                        <!--</blockquote>-->
                        <!--<p class="source">Diana	Luna<br /><span class="title">Entrepreneur, Maecenas</span></p>-->
                        <!--</div>&lt;!&ndash;//content&ndash;&gt;                         -->
                        <!--</div>&lt;!&ndash;//item&ndash;&gt;  -->
                        <!--<div class="carousel-item item">-->
                        <!--<figure class="profile"><img src="{{asset('/')}}front/images/people/profile-m-3.png" alt="" /></figure>-->
                        <!--<div class="content">-->
                        <!--<blockquote>-->
                        <!--<i class="fa fa-quote-left"></i>-->
                        <!--<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>-->
                        <!--</blockquote>-->
                        <!--<p class="source">Tony Lee<br /><span class="title">CTO, Lorem Ipsum</span></p>-->
                        <!--</div>&lt;!&ndash;//content&ndash;&gt;                         -->
                        <!--</div>&lt;!&ndash;//item&ndash;&gt;                                         -->
                    </div><!--//carousel-inner-->

                </div><!--//carousel-->
            </div><!--//container-->
        </section><!--//testimonials-->

        <!-- ******Press Section****** -->
        <section class="section press">
            <div class="container text-center">
                <h2 class="title">Key Clients of aamra infotainment limited</h2>
                <ul class="press-list list-inline row last">
                    <li class="col-4 col-md-2"><a href="#"><img class="img-fluid" src="{{asset('/')}}front/images/press/fedex.png" alt="" /></a></li>
                    <li class="col-4 col-md-2"><a href="#"><img class="img-fluid" src="{{asset('/')}}front/images/press/marico.png" alt="" /></a></li>
                    <li class="xs-break col-4 col-md-2"><a href="#"><img class="img-fluid" src="{{asset('/')}}front/images/press/nestlelogo.png" alt="" /></a></li>
                    <li class="col-4 col-md-2"><a href="#"><img class="img-fluid" src="{{asset('/')}}front/images/press/squarelogo.png" alt="" /></a></li>
                </ul><!--//press-list-->
                <div class="press-lead text-center">
                    <h3 class="title">Have press inquires?</h3>
                    <p class="press-links"><a href="#"><a href="{{route('/contact')}}">Get in touch</a></p>
                </div>

            </div><!--//container-->
        </section><!--//press-->

        <!-- ******CTA Section****** -->
        <section id="cta-section" class="section cta-section text-center home-cta-section">
            <div class="container">
                <h2 class="title">Ready to promote your school online?</h2>
                <p class="intro">More than <span class="counting">3,500</span> users are using Aamra EduManager</p>
                <p><a class="btn btn-cta btn-cta-primary" href="{{route('/customer-sign-up')}}" target="_blank">Get EduManager Now</a></p>
            </div><!--//container-->
        </section><!--//cta-section-->

    </div><!--//section-wrapper-->
@endsection
@section('scripts')
    <!-- Modal video -->
    <script type="text/javascript" src="{{asset('/')}}front/js/modal-video.js"></script>

    <!-- lightbox2-master -->
    <script type="text/javascript" src="{{asset('/')}}front/plugins/lightbox2-master/js/lightbox.min.js"></script>
@endsection
