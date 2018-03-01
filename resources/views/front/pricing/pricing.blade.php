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
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Hover over me</a>
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
                                <p class="price-figure"><span class="price-figure-inner"><span class="currency">BDT</span><span class="number">30,000*</span><br /><span class="unit">per month</span></span></p>
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
                                    <li class="disabled"><i class="fa fa-times"></i>24/7 support</li>
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
                            <div class="heading">
                                <h3 class="title">ENTERPRISE</h3>
                                <p class="price-figure">
                                    <span class="price-figure-inner">
                                        <span class="currency">CALL FOR PRICE</span>
                                        <span class="number"></span>
                                        <br/>
                                    </span>
                                </p>
                                <p class="border border-dark bg-secondary rounded mb-2">
                                    <span class="unit">Customization framework <br/> with <b> &lt;SOURCE CODE&gt; </b></span>
                                </p>
                            </div>
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
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq1"><i class="fa fa-plus-square"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq1" role="tabpanel" aria-labelledby="faq1">

                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.

                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq2"><i class="fa fa-plus-square"></i>What is the ipsum dolor sit amet quam tortor?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq2" role="tabpanel" aria-labelledby="faq2">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq3"><i class="fa fa-plus-square"></i>What is the ipsum dolor sit amet quam tortor?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq3" role="tabpanel" aria-labelledby="faq3">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq4"><i class="fa fa-plus-square"></i>Can I ipsum dolor sit amet nascetur ridiculus?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq4" role="tabpanel" aria-labelledby="faq4">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq5"><i class="fa fa-plus-square"></i>Is it possible to tellus eget auctor condimentum?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq5" role="tabpanel" aria-labelledby="faq5">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq6"><i class="fa fa-plus-square"></i>Would it elementum turpis semper imperdiet?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq6" role="tabpanel" aria-labelledby="faq6">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq7"><i class="fa fa-plus-square"></i>How can I imperdiet lorem sem non nisl?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq7" role="tabpanel" aria-labelledby="faq7">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
                        </div>
                    </div><!--//card-->

                    <div class="card">
                        <div class="card-header" role="tab">
                            <h4 class="card-title mb-0"><a data-parent="#accordion"
                                                           data-toggle="collapse" class="card-toggle" href="#faq8"><i class="fa fa-plus-square"></i>Can I imperdiet massa ut?</a></h4>
                        </div>

                        <div class="card-block collapse" id="faq8" role="tabpanel" aria-labelledby="faq8">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia
                            aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                            sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore sustainable VHS.
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

