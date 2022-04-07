<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lotus Cable</title>
    <!-- Stylesheets -->
    <link href="{{ asset('frontend/assets') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{asset('frontend/assets')}}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/assets')}}/images/favicon.png" type="image/x-icon"> --}}

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader">
  <span></span>
 </div> -->

        <!-- Main Header -->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container clearfix">

                    <div class="pull-left">
                        <ul class="info">
                            <li><a href="tel:+6789-875-2235"><span class="icon flaticon-maps-and-flags"></span>Call:
                                    +6789-875-2235</a></li>
                            <li><a href="mailto:Info.domain@info.com"><span
                                        class="icon flaticon-email-2"></span>Info.domain@info.com</a></li>
                        </ul>
                    </div>

                    <div class="pull-right clearfix">
                        <!-- Social Box -->
                        <div class="pull-left clearfix">
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Header Lower -->
            <div class="header-lower">

                <div class="auto-container clearfix">
                    <div class="inner-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="h1 font-weight-bold" style="padding: 15px 0">Lotus</div>
                            {{-- <div class="logo"><a href="index-2.html"><img src="{{asset('frontend/assets')}}/images/logo.png" alt="" title=""></a></div> --}}
                        </div>
                        <div class="nav-outer clearfix">

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="">
                                            <a href="{{ route('dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="current">
                                            <a href="{{ route('frontpage') }}">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="price.html">Pricing</a></li>
                                                <li><a href="movie.html">Movie's</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-detail.html">Services Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Our Products</a></li>
                                                <li><a href="shop-single.html">Product Single</a></li>
                                                <li><a href="shoping-cart.html">Shoping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="news-detail.html">Blog Single</a></li>
                                                <li><a href="not-found.html">Not Found</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->

                            <!-- Outer Box -->
                            <div class="outer-box clearfix">

                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="search-box-btn"><span class="fa fa-search"></span></div>
                                </div>

                                <!-- Cart Box -->
                                <div class="cart-box">
                                    <div class="dropdown">
                                        <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="flaticon-shopping-bag-2"></span><span
                                                class="total-cart">2</span></button>
                                        <div class="dropdown-menu pull-right cart-panel"
                                            aria-labelledby="dropdownMenu1">
                                            <div class="cart-product">
                                                <div class="inner">
                                                    <div class="cross-icon"><span class="icon fa fa-remove"></span>
                                                    </div>
                                                    <div class="image"><img
                                                            src="{{ asset('frontend/assets') }}/images/resource/post-thumb-1.jpg"
                                                            alt="" /></div>
                                                    <h3><a href="shoping-cart.html">Product 01</a></h3>
                                                    <div class="quantity-text">Quantity 1</div>
                                                    <div class="price">$99.00</div>
                                                </div>
                                            </div>
                                            <div class="cart-product">
                                                <div class="inner">
                                                    <div class="cross-icon"><span class="icon fa fa-remove"></span>
                                                    </div>
                                                    <div class="image"><img
                                                            src="{{ asset('frontend/assets') }}/images/resource/post-thumb-2.jpg"
                                                            alt="" /></div>
                                                    <h3><a href="shoping-cart.html">Product 02</a></h3>
                                                    <div class="quantity-text">Quantity 1</div>
                                                    <div class="price">$99.00</div>
                                                </div>
                                            </div>
                                            <div class="cart-total">Sub Total: <span>$198</span></div>
                                            <ul class="btns-boxed">
                                                <li><a href="shoping-cart.html">View Cart</a></li>
                                                <li><a href="checkout.html">CheckOut</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Cart Box -->

                                <!-- Nav Btn -->
                                <div class="nav-btn navSidebar-button"><span class="icon flaticon-dots-menu"></span>
                                </div>

                            </div>
                            <!-- End Outer Box -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index-2.html"><img
                                src="{{ asset('frontend/assets') }}/images/logo.png" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index-2.html"><img src="{{ asset('frontend/assets') }}/images/logo-2.png"
                                            alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h5>About Us</h5>
                                    <p class="text">The argument in favor of using filler text goes something
                                        like this: If you use real content in the Consulting Process, anytime you reach
                                        a review point you’ll end up reviewing and negotiating the content itself and
                                        not the design.</p>
                                    <a href="contact.html" class="theme-btn btn-style-one"><span
                                            class="txt">Consultation</span></a>
                                </div>
                                <div class="contact-info">
                                    <h5>Contact Info</h5>
                                    <ul class="list-style-one">
                                        <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City,
                                            USA</li>
                                        <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                        <li><span class="icon fa fa-envelope"></span>nextbit@gmail.com</li>
                                        <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday:
                                            Closed</li>
                                    </ul>
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                    <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


