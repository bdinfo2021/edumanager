@extends('front.master')
@section('body')
    <div class="headline-bg about-headline-bg">
    </div><!--//headline-bg-->

    <!-- ******Video Section****** -->
    <section class="story-section section section-on-bg">
        <h2 class="title container text-center">Our story, our value</h2>
        <div class="story-container container text-center">
            <div class="story-container-inner">
                <div class="about">
                    <p style="text-align: justify;"><b>aamra infotainment limited</b> is a one-stop web &amp; digital
                        marketing solutions company. From web designing to content management, event management to
                        hosting portals, online product promotion campaigns through digital marketing to maintaining
                        intranets; AIL has its wings spread wide across the digital world. </p>
                    <p style="text-align: justify;">This reliance has been achieved since individual client’s needs and
                        requirements are reviewed thoroughly. AIL also provides content services for its corporate
                        clients and through its popular portal bangladeshinfo.com, it portrays and presents a positive
                        Bangladesh to the world audience. </p>
                    <p style="text-align: justify;">Over the span of time, the company has delivered innovative and
                        unique web ideas with which it has secured a commendable registration among the minds of web
                        viewers. </p>
                    <p style="text-align: justify;">The longest running local web portal, www.bangladeshinfo.com is an
                        aamra infotainment initiative that also happens to be one of the most visited Bangladeshi
                        sites. </p>
                    <p style="text-align: justify;">We make sure that our clients run their day-to-day businesses in an
                        easier way by maintaining their intranet and websites. AIL, having its own ISP facilities,
                        designs and develops innovative and latest technology based web sites that merge information,
                        interactivity and aesthetic designs into a perfect blend. Our team also develops and maintains
                        web contents of a wide variety of websites. The portal provides the following channels: News,
                        Business, Sports, Cricket, IT, Fashion, Music, Entertainment and Food. AIL also focuses on web
                        solutions, advertising and a free web-based email service which includes a unique system that
                        allows users to send emails in Bangla. </p>
                    <blockquote class="belief">Finally, looking at aamra infotainment with a bird's eye view, it's
                        guaranteed that you'll discover a soothing mirror where you'll look at your own image in the
                        form of success, loyalty and reliance.
                    </blockquote>
                </div><!--//about-->
                <!--<div class="team">-->
                <!--<h3 class="title">Meet the team</h3>-->
                <!--<div class="row">-->
                <!--<div class="member col-lg-4 col-md-6 col-12">-->
                <!--<div class="member-inner">-->
                <!--<figure class="profile">-->
                <!--<img class="img-fluid" src="assets/images/team/member-1.png" alt=""/>-->
                <!--<figcaption class="info">-->
                <!--<span class="name">Mark Cooper</span>-->
                <!--<br />-->
                <!--<span class="job-title">Co-Founder</span>-->
                <!---->
                <!--</figcaption>-->
                <!--</figure>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="social">-->
                <!--<ul class="social-list list-inline">-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--</ul>&lt;!&ndash;//social-list&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//social&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member-inner&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member&ndash;&gt;-->
                <!--<div class="member col-lg-4 col-md-6 col-12">-->
                <!--<div class="member-inner">-->
                <!--<figure class="profile">-->
                <!--<img class="img-fluid" src="assets/images/team/member-2.png" alt=""/>-->
                <!--<figcaption class="info"><span class="name">Jack Tang</span><br /><span class="job-title">Co-Founder</span></figcaption>-->
                <!--</figure>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="social">-->
                <!--<ul class="social-list list-inline">-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--</ul>&lt;!&ndash;//social-list&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//social&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member-inner&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member&ndash;&gt;-->
                <!--<div class="member col-lg-4 col-md-6 col-12">-->
                <!--<div class="member-inner">-->
                <!--<figure class="profile">-->
                <!--<img class="img-fluid" src="assets/images/team/member-3.png" alt=""/>-->
                <!--<figcaption class="info"><span class="name">Anna Perry</span><br /><span class="job-title">Product/UX Designer</span></figcaption>-->
                <!--</figure>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="social">-->
                <!--<ul class="social-list list-inline">-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                <!--</ul>&lt;!&ndash;//social-list&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//social&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member-inner&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member&ndash;&gt;-->
                <!--<div class="member col-lg-4 col-md-6 col-12">-->
                <!--<div class="member-inner">-->
                <!--<figure class="profile">-->
                <!--<img class="img-fluid" src="assets/images/team/member-4.png" alt=""/>-->
                <!--<figcaption class="info"><span class="name">Tim Robertson</span><br /><span class="job-title">Back-end Developer</span></figcaption>-->
                <!--</figure>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="social">-->
                <!--<ul class="social-list list-inline">-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-github-alt"></i></a></li>-->
                <!--</ul>&lt;!&ndash;//social-list&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//social&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member-inner&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member&ndash;&gt;-->
                <!--<div class="member col-lg-4 col-md-6 col-12">-->
                <!--<div class="member-inner">-->
                <!--<figure class="profile">-->
                <!--<img class="img-fluid" src="assets/images/team/member-5.png" alt=""/>-->
                <!--<figcaption class="info"><span class="name">Rachel Wu</span><br /><span class="job-title">Front-end Developer</span></figcaption>-->
                <!--</figure>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="social">-->
                <!--<ul class="social-list list-inline">-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-github-alt"></i></a></li>-->
                <!--</ul>&lt;!&ndash;//social-list&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//social&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member-inner&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member&ndash;&gt;-->
                <!--<div class="member col-lg-4 col-md-6 col-12">-->
                <!--<div class="member-inner">-->
                <!--<figure class="profile">-->
                <!--<img class="img-fluid" src="assets/images/team/member-6.png" alt=""/>-->
                <!--<figcaption class="info"><span class="name">Carl Allison</span><br /><span class="job-title">Mobile Developer</span></figcaption>-->
                <!--</figure>&lt;!&ndash;//profile&ndash;&gt;-->
                <!--<div class="social">-->
                <!--<ul class="social-list list-inline">-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--<li class="list-inline-item"><a href="#"><i class="fa fa-github-alt"></i></a></li>-->
                <!--</ul>&lt;!&ndash;//social-list&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//social&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member-inner&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//member&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//row&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//team&ndash;&gt;-->
                <div class="press-kit text-center">
                    <h3 class="title">Our Mission & Vision</h3>
                    <p>To empower our customers, employees and partners by providing the finest products, services and
                        practices.</p>
                    <p>Excellence and innovation unlimited, through the power of “WE”.</p>
                    <p>Please <a href="{{route('/contact')}}">contact us</a> if you need more materials.</p>
                    <!--<a class="btn btn-cta btn-cta-secondary" href="#">Download Press Kit</a>-->
                </div><!--//press-kit-->
            </div><!--//story-container-->
        </div><!--//container-->
    </section><!--//story-video-->
@endsection