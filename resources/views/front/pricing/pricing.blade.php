@extends('front.master')
@section('body')
    <div class="headline-bg pricing-headline-bg">
    </div><!--//headline-bg-->

    <!-- ******Pricing Section****** -->
    <section class="pricing section section-on-bg">
        <div class="container">
            <h2 class="text-center font-weight-light text-white">Aamra EduManager with generous features available in affordable plans</h2>
            <div class="row">
                <div class="col-md-12 col-12 text-center">
                    <div class="generous-features bg-white">
                        <div class="feature">
                            <div class="icon students"></div>
                            <h2>Unlimited Students</h2>
                        </div>
                        <div class="feature">
                            <div class="icon logins"></div>
                            <h2>Unlimited User Logins</h2>
                            <p>(Teachers, Parents, Admins)</p>
                        </div>
                        <div class="feature">
                            <div class="icon courses"></div>
                            <h2>Unlimited <br> Courses &amp; Batches </h2>
                        </div>
                        <div class="feature">
                            <div class="icon hosting"></div>
                            <h2> Free Cloud Hosting </h2>
                        </div>
                        <div class="feature">
                            <div class="icon secured"></div>
                            <h2>SSL Secured</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h2 class="text-center font-weight-light text-white ">Affordable Plans for Smart Institutes</h2>
            </div>
            <p class="intro text-center"></p>
            <div class="price-cols m-auto">
                <h4 class="text-center"></h4>
                <div class="items-wrapper row">
                    <div class="item price-1 col-md-4 col-12 text-center">
                        <div class="item-inner">
                            <div class="heading">
                                <h3 class="title">CORE</h3>
                                <p class="price-figure"><span class="price-figure-inner"><span class="currency">BDT</span><span class="number">15,000</span><br /><span class="unit"> per month</span></span></p>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled feature-list">
                                    <li class="disabled"><i class="fa fa-check"></i>Sign up & Configuration Fee: <br/> BDT 5,000 only</li>
                                    <li class="bg-light"><i class="fa fa-check"></i><b>18 Core Modules</b></li>
                                    <li><i class="fa fa-check"></i>Online Subscription Service</li>
                                    <li><i class="fa fa-check"></i>Pay-as-you-Go Model</li>
                                    <li><i class="fa fa-check"></i>Webinar Based Training</li>
                                    <li><i class="fa fa-check"></i>Best for School</li>
                                </ul>
                                <a class="btn btn-cta btn-cta-primary" href="{{route('/sign-up')}}">GET STARTED NOW</a>
                            </div><!--//content-->
                        </div><!--//item-inner-->
                    </div><!--//item-->

                    <div class="item price-2 col-md-4 col-12 text-center best-buy">
                        <div class="item-inner">
                            <div class="heading">
                                <h3 class="title">ADVANCED</h3>
                                <p class="price-figure"><span class="price-figure-inner"><span class="currency">BDT</span><span class="number">30,000</span><span class="currency-star">*</span><br /><span class="unit">per month</span></span></p>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled feature-list feature-list-middle">
                                    <li class="disabled"><i class="fa fa-check"></i>Sign up & Configuration Fee: <br/> BDT 5,000 only</li>
                                    <li><i class="fa fa-check"></i><b>18 Core Modules</b></li>
                                    <li class="bg-light"><i class="fa fa-check"></i><b>24 Advanced Modules</b></li>
                                    <li><i class="fa fa-check"></i>Email Support</li>
                                    <li><i class="fa fa-check"></i>Phone Support</li>
                                    <li><i class="fa fa-check"></i>Personnel Online Training</li>
                                    <li><i class="fa fa-check"></i>Onsite Support (optional)</li>
                                    <li><i class="fa fa-check"></i>Dedicated Cloud Based Server</li>
                                    <li><i class="fa fa-check"></i>Best for School/College</li>
                                    {{--<li class="disabled"><i class="fa fa-times"></i>24/7 support</li>--}}
                                </ul>
                                <a class="btn btn-cta btn-cta-primary" href="{{route('/sign-up')}}">GET STARTED NOW</a>
                            </div><!--//content-->
                            <div class="ribbon">
                                <div class="text">Popular</div>
                            </div><!--//ribbon-->
                        </div><!--//item-inner-->
                    </div><!--//item-->

                    <div class="item price-3 col-md-4 col-12 text-center">
                        <div class="item-inner">
                            <div class="heading" id="enterprise-heading">
                                <h3 class="title">ENTERPRISE</h3>
                                <p class="price-figure">
                                    <span class="price-figure-inner">
                                        <span class="currency">CALL FOR PRICE</span>
                                        <span class="number"></span>
                                        <br/>
                                    </span>
                                </p>
                                <p class="border rounded mb-2 price-figure">
                                    <span class="unit" style="font-size: 13px;">Customization framework <br/> with <b> &lt;SOURCE CODE&gt; </b></span>
                                </p>
                            </div>
                            {{--<div class="heading">--}}
                                {{--<h3 class="title">ENTERPRISE</h3>--}}
                                {{--<p class="price-figure">--}}
                                    {{--<span class="price-figure-inner">--}}
                                        {{--<span class="currency">CALL FOR PRICE</span>--}}
                                        {{--<span class="number"></span>--}}
                                        {{--<span class="currency-star">*</span><br />--}}
                                        {{--<span class="unit">Customization framework <br/> with <b> &lt;SOURCE CODE&gt; </b></span>--}}
                                    {{--</span>--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            <div class="content">
                                <ul class="list-unstyled feature-list feature-list-last">
                                    <li class="disabled"><i class="fa fa-check"></i>Sign up & Configuration Fee: <br/> << Call for Price >></li>
                                    <li><i class="fa fa-check"></i><b>18 Core Modules</b></li>
                                    <li><i class="fa fa-check"></i><b>24 Advanced Modules</b></li>
                                    <li class="bg-light"><i class="fa fa-check"></i><b>12 Enterprise Modules</b></li>

                                    <li><i class="fa fa-check"></i><a data-toggle="tooltip" data-html="true" title="<ul><li><b>• Dedicated Agent</b> to help your institution's transition smoother.</li><li><b>•</b> You can reach out to us through <b>Email, Phone, Chat</b></li></ul>">Priority Support</a></li>
                                    <li><i class="fa fa-check"></i><a data-toggle="tooltip" data-html="true" title="<ul><li>On demand <b> Onsite Training </b> by the best of our trainers at your institution to make your employees Fedena super users.</li></ul>">Onsite Training</a></li>
                                    <li><i class="fa fa-check"></i><a data-toggle="tooltip" data-html="true" title="<ul><li><b>•</b> Course and Batch creation</li><li><b>•</b> Creation of Student Category</li><li><b>•</b> Data Clean-up </li><li><b>•</b> Data Alignment</li><li><b>•</b> Data Upload</li></ul>">Data Entry Services</a></li>
                                    <li><i class="fa fa-check"></i><a data-toggle="tooltip" data-html="true" title="<ul><li>Our team will analyse your institution’s Fee structure and will implement the Finance workflow tailored for your setup.</li></ul>">Fee Structure Integration</a></li>

                                    <li><i class="fa fa-check"></i>Dedicated Cloud Based Server</li>
                                    <li><i class="fa fa-check"></i>Onsite Dedicated Support</li>
                                    <li><i class="fa fa-check"></i>Best for School/College/University</li>
                                </ul>
                                <a class="btn btn-cta btn-cta-primary" href="{{route('/sign-up')}}">GET STARTED NOW</a>
                            </div><!--//content-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//items-wrapper-->
                <div class="tooltip">
                    <a href="#" title="That&apos;s what this widget is">Tooltips</a> can be attached to any element. When you hover
                    the element with your mouse, the title attribute is displayed in a little box next to the element, just like a native tooltip.
                </div>

                <p class="note font-weight-light">* - Additional BDT 45,000 only per month for Onsite Support (on demand). All prices are including applicable VAT.</p>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//pricing-->

    <!-- ******FAQ Section****** -->
    <section class="faq section has-bg-color">
        <div class="container">
            <h2 class="title text-center">Frequently Asked Questions</h2>
            <div class="row">
                <div id="accordion" class="w-75 accordion m-auto" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0">
                                <a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq1">
                                    <i class="fa fa-plus-square"></i>What is Aamra EduManager?
                                </a>
                            </h4>
                        </div>

                        <div class="card-block collapse" id="faq1" role="tabpanel" aria-labelledby="faq1">

                            Aamra EduManager is an academic management system for educational institutions of all sizes. It offers such capabilities fees management, student admission & database, course management, customizable dashboards, SMS & Payment Gateway integration, and others. The software was powered by one of the largest IT Conglomerate Aamra Companies headquartered in Dhaka, Bangladesh. ... To learn more about
                            <a href="http://www.aamra.com.bd">aamra Companies</a>

                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq2"><i class="fa fa-plus-square"></i>How much does Aamra EduManager cost? </a></h4>
                        </div>

                        <div class="card-block collapse" id="faq2" role="tabpanel" aria-labelledby="faq2">
                            Aamra EduManager can be start by paying only BDT 5,000 only Signup Fee and as low as BDT 15,000 per month. According to the requirement of our organization, you can upgrade the package accordingly. The software system can be accessible using your organization’s Broadband Internet Connection; you don’t need any Server or Data Center. No other license fee or hidden cost is there.
                            <br/>... Read more about <a href="{{route('/pricing')}}">Aamra EduManager Pricing</a>
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq3"><i class="fa fa-plus-square"></i>How does Aamra EduManager pricing compares to their alternatives?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq3" role="tabpanel" aria-labelledby="faq3">
                            For an education institute, whether the student is 10 or 10 million, you can use aamra EduManager School Management System upfront without paying high one-time cost or student based license fee. The monthly charges are fixed & flat for any numbers of students & schools/colleges including all the service & functional modules as well as security features. e.g. SSL, 2FA, etc.
                            <br/>... Read more about <a href="{{route('/pricing')}}">Aamra EduManager Pricing</a>
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq4"><i class="fa fa-plus-square"></i>What are the main features of Aamra EduManager? </a></h4>
                        </div>

                        <div class="card-block collapse" id="faq4" role="tabpanel" aria-labelledby="faq4">
                            Aamra EduManager is an online web/intranet based software with rich user interface for school or college information management system that simplifies the management processes of most activities of an educational institution. The set of features includes availability of the various plugins, RFID based SMS notification on student attendance, built-in accounting system or integration of existing accounting system e.g. Tally, Quickbook or any.
                            <br/>
                            <br/>
                            The powerful programming framework, Ruby on Rails, is the foundation on which Aamra EduManager is built. aamra EduManager is Usable, Customizable, Secured & Scalable to meet every requirement of a School/College/University:
                            <br/>
                            <br/>
                            1) User-friendly UI/UX Design <br/>
                            2) Start using in 10 minutes <br/>
                            3) No high-level technical skills or traibng required <br/>
                            4) Plugin based architecture <br/>
                            5) Ruby on Rails <br/>
                            6) Easy and cheap to customize <br/>
                            7) Secured Encryption standards <br/>
                            8) High Secured Servers <br/>
                            9) 10 students or 10 million students -> Same eduManager System <br/>
                            10) Deployed in Web Cloud servers <br/>
                            11) Can scale-up and scale-down according to demands <br/>
                            12) Built-in accounting system as well as option of adding other accounting software
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq5"><i class="fa fa-plus-square"></i>Does Aamra EduManager fit my organization & business? </a></h4>
                        </div>

                        <div class="card-block collapse" id="faq5" role="tabpanel" aria-labelledby="faq5">
                            Aamra EduManager is completely scalable ERP Software system for any school or college or university for any numbers of students. It has complete education academic management functions for Students, Teachers, Parents & Officials including Student Database, Fees Collection, Accounting, Examination & Results, Financial auditing, Library management and many others. If your organization is a School or College or University or Training Center or coaching institute or tuition center or any institution having at least 10+ students with classroom facilities and related academic functions, aamra EduManager is the ultimate suitable solution for you to ensure proper operations & management of your organization. The user-friendly & easy interface & visual icon based dashboard doesn’t require any technical person to use it.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq6"><i class="fa fa-plus-square"></i>Who will be responsible for after-sales technical support? </a></h4>
                        </div>

                        <div class="card-block collapse" id="faq6" role="tabpanel" aria-labelledby="faq6">
                            Aamra EduManager Support Team will ensure 24/7 support. Our Team is there to offer support 24/7 to help with any problem you encounter or answer any questions you may have about Aamra EduManager. The support team will provide all the necessary support for configuration, implementation, trouble-shooting, training & billing issues whenever it is required. On demand, we provide dedicated onsite engineers to provide instant support for your organization.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq7"><i class="fa fa-plus-square"></i>Do I need Server Computers or Data Center? </a></h4>
                        </div>

                        <div class="card-block collapse" id="faq7" role="tabpanel" aria-labelledby="faq7">
                            Aamra EduManager is a Web Based solution. You do not have to install anything on your computer. Aamra EduManager is an Online School Management System. That means you use it in your favorite browser. You don’t even need any server or Data Center or any other IT hardware to use the system.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq8"><i class="fa fa-plus-square"></i>Do you have Mobile App? </a></h4>
                        </div>

                        <div class="card-block collapse" id="faq8" role="tabpanel" aria-labelledby="faq8">
                            Yes, we have both Android & iOS supported mobile apps to access & use all of the functions of School Management System with your organization data. This mobile app can be published to the respective App Stores, if needed.
                        </div>
                    </div><!--//card-->
                </div>
            </div><!--//row-->
            <div class="contact-lead text-center">
                <h4 class="title">Have more questions?</h4>
                <a class="btn btn-cta btn-cta-secondary" href="contact.html">Get in touch</a>
            </div>
        </div><!--//container-->
    </section><!--//faq-->

    <!-- ******CTA Section****** -->
    <section id="cta-section" class="section cta-section text-center pricing-cta-section">
        <div class="container">
            <h2 class="title">More than <span class="counting">3,500</span> users are using Aamra EduManager</h2>
            <p class="intro">What are you waiting for?</p>
            <p><a class="btn btn-cta btn-cta-primary" href="{{route('/sign-up')}}" target="_blank">Get EduManager Now</a></p>
        </div><!--//container-->
    </section><!--//cta-section-->
@endsection
@section('scripts')
    <script !src="">
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection

