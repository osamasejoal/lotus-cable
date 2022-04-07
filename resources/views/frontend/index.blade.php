@extends('frontend.layouts.master')


@section('main-content')
    <!-- Main Section -->
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide"
                style="background-image: url({{ asset('frontend/assets/images/main-slider/slider_1.jpg') }})">
                <div class="pattern-layer"
                    style="background-image: url({{ asset('frontend/assets/images/main-slider/pattern-layer.png') }})">
                </div>
                <!-- <div class="color-layer-one"></div>
        <div class="color-layer-two"></div>
        <div class="color-layer-three"></div> -->
                <div class="auto-container">

                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <div class="title">Nextbit Internet & TV</div>
                            <h1>Ultimate control of your internet</h1>
                            <div class="btns-box">
                                <a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More
                                        <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="contact.html" class="theme-btn btn-style-three"><span
                                        class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="slide"
                style="background-image: url({{ asset('frontend/assets/images/main-slider/slider_2.jpg') }})">
                <div class="pattern-layer"
                    style="background-image: url({{ asset('frontend/assets/images/main-slider/pattern-layer.png') }})">
                </div>
                <!-- <div class="color-layer-one"></div>
        <div class="color-layer-two"></div>
        <div class="color-layer-three"></div> -->
                <div class="auto-container">

                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <div class="title">Nextbit Internet & TV</div>
                            <h1>Ultimate control of your internet</h1>
                            <div class="btns-box">
                                <a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More
                                        <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="contact.html" class="theme-btn btn-style-three"><span
                                        class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <!-- End Main Section -->

    <!-- Appointment Section -->
    <section class="appointment-section"
        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-1.png)">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>Let's find deals and services available in your area</h3>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <form method="post" action="https://html.themexriver.com/nextbit/contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter street address & apartment"
                                        required="">
                                    <button type="submit" class="theme-btn btn-style-two"><span class="txt">Check
                                            Availability <i class="lnr lnr-arrow-right"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Services Section -->
    <section class="services-section"
        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-2.png)">
        <div class="auto-container">

            <!-- Upper Section -->
            <div class="upper-section">
                <div class="row clearfix">

                    <!-- Service block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="border-one"></span>
                            <span class="border-two"></span>
                            <h4><a href="services-detail.html">Broadband</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet them consec tetura dipiscing elit sed
                                doeiumod Donec modern solution quam felis.</div>
                            <div class="icon"><img src="{{ asset('frontend/assets') }}/images/icons/service-1.svg"
                                    alt="" /></div>
                            <a class="services" href="services-detail.html">Get Broadband Service <span
                                    class="arrow lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>

                    <!-- Service block -->
                    <div class="service-block active col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="border-one"></span>
                            <span class="border-two"></span>
                            <h4><a href="services-detail.html">Satelite TV</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet them consec tetura dipiscing elit sed
                                doeiumod Donec modern solution quam felis.</div>
                            <div class="icon"><img src="{{ asset('frontend/assets') }}/images/icons/service-2.svg"
                                    alt="" /></div>
                            <a class="services" href="services-detail.html">Get Broadband Service <span
                                    class="arrow lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>

                    <!-- Service block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="border-one"></span>
                            <span class="border-two"></span>
                            <h4><a href="services-detail.html">Home Phone</a></h4>
                            <div class="text">Lorem ipsum dolor sit amet them consec tetura dipiscing elit sed
                                doeiumod Donec modern solution quam felis.</div>
                            <div class="icon"><img src="{{ asset('frontend/assets') }}/images/icons/service-3.svg"
                                    alt="" /></div>
                            <a class="services" href="services-detail.html">Get Broadband Service <span
                                    class="arrow lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Upper Section -->

            <!-- Lower Section -->
            <div class="lower-section">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column titlt" data-tilt data-tilt-max="3">
                            <div class="color-layer"></div>
                            <div class="border-layer"></div>
                            <div class="image">
                                <img src="{{ asset('frontend/assets') }}/images/resource/service-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">WHO WE ARE</div>
                                <h2>Get TV service with your internet service</h2>
                            </div>
                            <div class="bold-text">Business is the activity of making one's living or making money by
                                producing or buying and selling products</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius
                                to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean
                                massa. Cum sociis natoque penatibus et magnis dis partu rient to montes.Aene an massa.</div>
                            <a href="about.html" class="theme-btn btn-style-four"><span class="txt">Read More <i
                                        class="lnr lnr-arrow-right"></i></span></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Lower Section -->

        </div>
    </section>
    <!-- End Services Section -->

    <!-- Pricing Section -->
    <section class="pricing-section"
        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-3.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">Pricing Plan</div>
                <h2>Choose your plan</h2>
            </div>
            <!-- End Sec Title -->
            <div class="row clearfix">

                <!-- Price Block -->
                <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="upper-box"
                            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-4.png)">
                            <ul class="icon-list">
                                <li><span class="icon"><img
                                            src="{{ asset('frontend/assets') }}/images/icons/service-1.svg"
                                            alt="" /></span></li>
                            </ul>
                            <h4>Only Internet <span>$55.00 / Month</span></h4>
                        </div>
                        <div class="lower-box">
                            <ul class="price-list">
                                <li>Internet with a 100Mbps</li>
                                <li>Connect multiple users</li>
                                <li>WiFi router & prevention</li>
                                <li>Unlimited devices</li>
                            </ul>
                            <div class="button-box">
                                <a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get
                                        started</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="upper-box"
                            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-4.png)">
                            <ul class="icon-list">
                                <li><span class="icon"><img
                                            src="{{ asset('frontend/assets') }}/images/icons/service-2.svg"
                                            alt="" /></span></li>
                            </ul>
                            <h4>Only TV <span>$55.00 / Month</span></h4>
                        </div>
                        <div class="lower-box">
                            <ul class="price-list">
                                <li>Internet with a 100Mbps</li>
                                <li>Connect multiple users</li>
                                <li>WiFi router & prevention</li>
                                <li>Unlimited devices</li>
                            </ul>
                            <div class="button-box">
                                <a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get
                                        started</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="upper-box"
                            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-4.png)">
                            <ul class="icon-list">
                                <li><span class="icon"><img
                                            src="{{ asset('frontend/assets') }}/images/icons/service-3.svg"
                                            alt="" /></span></li>
                            </ul>
                            <h4>Only Home Phone <span>$55.00 / Month</span></h4>
                        </div>
                        <div class="lower-box">
                            <ul class="price-list">
                                <li>Internet with a 100Mbps</li>
                                <li>Connect multiple users</li>
                                <li>WiFi router & prevention</li>
                                <li>Unlimited devices</li>
                            </ul>
                            <div class="button-box">
                                <a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get
                                        started</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="upper-box"
                            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-4.png)">
                            <ul class="icon-list">
                                <li><span class="icon"><img
                                            src="{{ asset('frontend/assets') }}/images/icons/service-1.svg"
                                            alt="" /></span></li>
                                <li><span class="icon"><img
                                            src="{{ asset('frontend/assets') }}/images/icons/service-2.svg"
                                            alt="" /></span></li>
                                <li><span class="icon"><img
                                            src="{{ asset('frontend/assets') }}/images/icons/service-3.svg"
                                            alt="" /></span></li>
                            </ul>
                            <h4>Internet + TV + Phone <span>$55.00 / Month</span></h4>
                        </div>
                        <div class="lower-box">
                            <ul class="price-list">
                                <li>Internet with a 100Mbps</li>
                                <li>Connect multiple users</li>
                                <li>WiFi router & prevention</li>
                                <li>Unlimited devices</li>
                            </ul>
                            <div class="button-box">
                                <a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get
                                        started</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- Facility Section -->
    <section class="facility-section"
        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-6.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">Our Facility</div>
                        <h2>Few great reasons make <br> you choice us</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">Business is the activity of making one's living or making money by
                            producing <br> cumsociis natoque penatibus et magnis dis partu rient to montes. Aene an <br>
                            massa. cumsociis natoque penatibus. </div>
                    </div>
                </div>
            </div>
            <!-- End Sec Title -->
            <div class="row clearfix">

                <!-- Blocks Column -->
                <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!-- Facility Block -->
                            <div class="facility-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="pattern-layer"
                                        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-14.png)">
                                    </div>
                                    <div class="icon-box flaticon-swimming-pool"></div>
                                    <h5><a href="services-detail.html">Free Installation</a></h5>
                                    <div class="text">Lorem ipsum dolor sit amet them consec tetur elit sed do
                                        eiumod. Donec quam felis ies nec.</div>
                                </div>
                            </div>

                            <!-- Facility Block -->
                            <div class="facility-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="pattern-layer"
                                        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-14.png)">
                                    </div>
                                    <div class="icon-box flaticon-5g"></div>
                                    <h5><a href="services-detail.html">Ultrafast Connect</a></h5>
                                    <div class="text">Lorem ipsum dolor sit amet them consec tetur elit sed do
                                        eiumod. Donec quam felis ies nec.</div>
                                </div>
                            </div>

                            <!-- Facility Block -->
                            <div class="facility-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="pattern-layer"
                                        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-14.png)">
                                    </div>
                                    <div class="icon-box flaticon-8k"></div>
                                    <h5><a href="services-detail.html">4K and 8K Quality</a></h5>
                                    <div class="text">Lorem ipsum dolor sit amet them consec tetur elit sed do
                                        eiumod. Donec quam felis ies nec.</div>
                                </div>
                            </div>

                            <!-- Facility Block -->
                            <div class="facility-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="pattern-layer"
                                        style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-14.png)">
                                    </div>
                                    <div class="icon-box flaticon-customer-service"></div>
                                    <h5><a href="contact.html">Fast Support 24/7</a></h5>
                                    <div class="text">Lorem ipsum dolor sit amet them consec tetur elit sed do
                                        eiumod. Donec quam felis ies nec.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer"></div>
                        <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('frontend/assets') }}/images/resource/facility.png" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Facility Section -->

    <!-- Internet Section -->
    <section class="internet-section"
        style="background-image: url({{ asset('frontend/assets/images/background/11.jpg') }})">
        <div class="auto-container">
            <div class="clearfix">
                <div class="content-column">
                    <h2>Save money by bundling your internet service with TV service.</h2>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum
                        sociis natoque penatibus et magnis dis partu rient to montes.Aene an massa.</div>
                    <div class="price">$25/ per month</div>
                    <a href="about.html" class="theme-btn btn-style-four"><span class="txt">Read More <i
                                class="lnr lnr-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Internet Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="image-layer"
            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-7.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">testimonial</div>
                <h2>What our clients say</h2>
            </div>
            <!-- End Sec Title -->

            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                consec tetur, adipisci velit, sed quia non num the quam eius modi the tempora Neque porro
                                quis quam.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-8.png)">
                            </div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="{{ asset('frontend/assets') }}/images/resource/author-1.jpg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Stiven Morgan</div>
                            <div class="designation">Pure Tecnology</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                consec tetur, adipisci velit, sed quia non num the quam eius modi the tempora Neque porro
                                quis quam.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-8.png)">
                            </div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="{{ asset('frontend/assets') }}/images/resource/author-2.jpg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Danial Pedro</div>
                            <div class="designation">Northen City</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                consec tetur, adipisci velit, sed quia non num the quam eius modi the tempora Neque porro
                                quis quam.</div>
                        </div>
                        <div class="lower-box">
                            <div class="color-layer"></div>
                            <div class="pattern-layer"
                                style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-8.png)">
                            </div>
                            <div class="author-image-outer">
                                <span class="quote-icon fa fa-quote-left"></span>
                                <div class="author-image">
                                    <img src="{{ asset('frontend/assets') }}/images/resource/author-3.jpg" alt="" />
                                </div>
                            </div>
                            <div class="author-name">Rannsan Wiks</div>
                            <div class="designation">CEO, Glob Tech</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">

            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/1.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/2.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/3.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/4.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/5.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/1.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/2.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/3.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('frontend/assets') }}/images/clients/4.png" alt=""></a></div>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="pattern-layer-one"
            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-9.png)"></div>
        <div class="pattern-layer-two"
            style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-10.png)"></div>
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title light">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">Now Showing</div>
                        <h2>Featured showing</h2>
                    </div>
                    <div class="pull-right">
                        <div class="button-box">
                            <a href="movie.html" class="theme-btn btn-style-two"><span class="txt">View More <i
                                        class="lnr lnr-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sec Title -->

            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-1.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Robin Hood</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2010</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-2.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Bad Boys Life</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2012</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-3.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Hot Dolitle</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2014</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-4.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Invisible Man</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2016</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-5.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Onward Hood</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2018</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-6.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Tenet Life</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-7.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">The Grudge</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-8.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Underwater</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-9.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">The Turning</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            <img src="{{ asset('frontend/assets') }}/images/resource/feature-10.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Birds of Prey</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Store Section -->
    <section class="store-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Online store</div>
                <h2>Our popular products</h2>
            </div>
            <!-- End Sec Title -->

            <div class="four-item-carousel owl-carousel owl-theme">

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/1.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">WiFe Streaming Router</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/2.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">Ultra HD 2GB+8GB TV Box</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/3.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">Bluetooth Speaker</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/4.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">Nest Cam Indoor</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/1.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">WiFe Streaming Router</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/2.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">Ultra HD 2GB+8GB TV Box</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/3.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">Bluetooth Speaker</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="shop-single.html"><img
                                    src="{{ asset('frontend/assets') }}/images/resource/products/4.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <a href="shop-single.html" class="name">Nest Cam Indoor</a>
                            <div class="price">$33.40</div>
                            <ul class="shop-options">
                                <li><a href="shop-single.html" class="cart">Add to Cart</a></li>
                                <li><a href="shop-single.html" class="fa fa-heart"></a></li>
                                <li><a href="shop-single.html" class="fa fa-random"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Store Section -->
@endsection
