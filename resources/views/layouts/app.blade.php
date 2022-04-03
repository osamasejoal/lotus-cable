<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lotus Cable</title>

    <link href="{{ asset('backend/assets') }}/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png"
        sizes="144x144">
    <link href="{{ asset('backend/assets') }}/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png"
        sizes="114x114">
    <link href="{{ asset('backend/assets') }}/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png"
        sizes="72x72">
    <link href="{{ asset('backend/assets') }}/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="{{ asset('backend/assets') }}/img/favicon.png" rel="icon" type="image/png">
    <link href="{{ asset('backend/assets') }}/img/favicon.ico" rel="shortcut icon">


    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/lib/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/separate/vendor/lobipanel.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/lib/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/main.css">

    @yield('main-style-content')
</head>

<body class="with-side-menu control-panel control-panel-compact">

    <header class="site-header">
        <div class="container-fluid">
            <a href="#" class="site-logo font-weight-bold h3 pr-2">
                Lotus Cable
                {{-- <img class="hidden-md-down" src="{{ asset('backend/assets') }}/img/logo-2.png" alt="">
                <img class="hidden-lg-down" src="{{ asset('backend/assets') }}/img/logo-2-mob.png" alt=""> --}}
            </a>

            <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button>

            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">
                        <div class="dropdown dropdown-notification notif">
                            <a href="#" class="header-alarm dropdown-toggle active" id="dd-notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-alarm"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif"
                                aria-labelledby="dd-notification">
                                <div class="dropdown-menu-notif-header">
                                    Notifications
                                    <span class="label label-pill label-danger">4</span>
                                </div>
                                <div class="dropdown-menu-notif-list">
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="{{ asset('backend/assets') }}/img/photo-64-1.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Morgan</a> was bothering about something
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="{{ asset('backend/assets') }}/img/photo-64-2.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Lioneli</a> had commented on this <a href="#">Super Important
                                            Thing</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="{{ asset('backend/assets') }}/img/photo-64-3.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="{{ asset('backend/assets') }}/img/photo-64-4.jpg" alt="">
                                        </div>
                                        <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a
                                            href="#">This Movie</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-notif-more">
                                    <a href="#">See more</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown-notification messages">
                            <a href="#" class="header-alarm dropdown-toggle active" id="dd-messages"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-icon-mail"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages"
                                aria-labelledby="dd-messages">
                                <div class="dropdown-menu-messages-header">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab-incoming"
                                                role="tab">
                                                Inbox
                                                <span class="label label-pill label-danger">8</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab-outgoing"
                                                role="tab">Outbox</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-incoming" role="tabpanel">
                                        <div class="dropdown-menu-messages-list">
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/photo-64-2.jpg"
                                                        alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about
                                                    something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/avatar-2-64.png"
                                                        alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!
                                                    Morgan was bothering about something.</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/photo-64-2.jpg"
                                                        alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about
                                                    something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/avatar-2-64.png"
                                                        alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about
                                                    something...</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-outgoing" role="tabpanel">
                                        <div class="dropdown-menu-messages-list">
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/avatar-2-64.png"
                                                        alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!
                                                    Morgan was bothering about something...</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/photo-64-2.jpg"
                                                        alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!
                                                    Morgan was bothering about something.</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/avatar-2-64.png"
                                                        alt=""></span>
                                                <span class="mess-item-name">Christian Burtons</span>
                                                <span class="mess-item-txt">Morgan was bothering about
                                                    something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img
                                                        src="{{ asset('backend/assets') }}/img/photo-64-2.jpg"
                                                        alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about
                                                    something!</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-notif-more">
                                    <a href="#">See more</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown-lang">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="flag-icon flag-icon-us"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-col">
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-ru"></span>Русский</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-de"></span>Deutsch</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-it"></span>Italiano</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-es"></span>Español</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-pl"></span>Polski</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-li"></span>Lietuviu</a>
                                </div>
                                <div class="dropdown-menu-col">
                                    <a class="dropdown-item current" href="#"><span
                                            class="flag-icon flag-icon-us"></span>English</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-fr"></span>Français</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-by"></span>Беларускi</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-ua"></span>Українська</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-cz"></span>Česky</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="flag-icon flag-icon-ch"></span>中國</a>
                                </div>
                            </div>
                        </div>



                        <!-- |||||||||||||
                        User Profile Data
                        |||||||||||||| -->
                        <div class="dropdown user-menu">
                            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('backend/assets/images/profile-pic') . '/' . auth()->user()->image }}" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                <a class="dropdown-item" href="{{ route('frontpage') }}"><span
                                        class="font-icon fa fa-anchor"></span>Front
                                    page</a>
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><span
                                        class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                        <button type="button" class="burger-right">
                            <i class="font-icon-menu-addl"></i>
                        </button>
                    </div>
                    <!--.site-header-shown-->

                    <div class="mobile-menu-right-overlay"></div>
                    <div class="site-header-collapsed">
                        <div class="site-header-collapsed-in">
                            <div class="dropdown dropdown-typical">
                                <div class="dropdown-menu" aria-labelledby="dd-header-sales">
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                            <div class="dropdown dropdown-typical">
                                <a class="dropdown-toggle" id="dd-header-marketing" data-target="#"
                                    href="http://example.com" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="font-icon font-icon-cogwheel"></span>
                                    <span class="lbl">Marketing automation</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
                                    <a class="dropdown-item" href="#">Current Search</a>
                                    <a class="dropdown-item" href="#">Search for Issues</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Recent issues</div>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-comments"></span>Third Party Test</a>
                                    <div class="dropdown-more">
                                        <div class="dropdown-more-caption padding">more...</div>
                                        <div class="dropdown-more-sub">
                                            <div class="dropdown-more-sub-in">
                                                <a class="dropdown-item" href="#"><span
                                                        class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                                <a class="dropdown-item" href="#"><span
                                                        class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                                <a class="dropdown-item" href="#"><span
                                                        class="font-icon font-icon-speed"></span>Prep Official App</a>
                                                <a class="dropdown-item" href="#"><span
                                                        class="font-icon font-icon-users"></span>CATprer Test</a>
                                                <a class="dropdown-item" href="#"><span
                                                        class="font-icon font-icon-comments"></span>Third Party
                                                    Test</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Import Issues from CSV</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Filters</div>
                                    <a class="dropdown-item" href="#">My Open Issues</a>
                                    <a class="dropdown-item" href="#">Reported by Me</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Manage filters</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Timesheet</div>
                                    <a class="dropdown-item" href="#">Subscribtions</a>
                                </div>
                            </div>
                            <div class="dropdown dropdown-typical">
                                <a class="dropdown-toggle" id="dd-header-social" data-target="#"
                                    href="http://example.com" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="font-icon font-icon-share"></span>
                                    <span class="lbl">Social media</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dd-header-social">
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                            <div class="dropdown dropdown-typical">
                                <a href="#" class="dropdown-toggle no-arr">
                                    <span class="font-icon font-icon-page"></span>
                                    <span class="lbl">Projects</span>
                                    <span class="label label-pill label-danger">35</span>
                                </a>
                            </div>

                            <div class="dropdown dropdown-typical">
                                <a class="dropdown-toggle" id="dd-header-form-builder" data-target="#"
                                    href="http://example.com" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="font-icon font-icon-pencil"></span>
                                    <span class="lbl">Form builder</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dd-header-form-builder">
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Add
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dd-header-add">
                                    <a class="dropdown-item" href="#">Quant and Verbal</a>
                                    <a class="dropdown-item" href="#">Real Gmat Test</a>
                                    <a class="dropdown-item" href="#">Prep Official App</a>
                                    <a class="dropdown-item" href="#">CATprer Test</a>
                                    <a class="dropdown-item" href="#">Third Party Test</a>
                                </div>
                            </div>
                            <div class="help-dropdown">
                                <button type="button">
                                    <i class="font-icon font-icon-help"></i>
                                </button>
                                <div class="help-dropdown-popup">
                                    <div class="help-dropdown-popup-side">
                                        <ul>
                                            <li><a href="#">Getting Started</a></li>
                                            <li><a href="#" class="active">Creating a new project</a></li>
                                            <li><a href="#">Adding customers</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Importing data</a></li>
                                            <li><a href="#">Exporting data</a></li>
                                        </ul>
                                    </div>
                                    <div class="help-dropdown-popup-cont">
                                        <div class="help-dropdown-popup-cont-in">
                                            <div class="jscroll">
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum is simply
                                                    <span class="describe">Lorem Ipsum has been the industry's
                                                        standard dummy text </span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Contrary to popular belief
                                                    <span class="describe">Lorem Ipsum is not simply random text.
                                                        It has roots in a piece of classical Latin literature from 45
                                                        BC</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    The point of using Lorem Ipsum
                                                    <span class="describe">Many desktop publishing packages and
                                                        web page editors now use Lorem Ipsum as their default model
                                                        text</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum
                                                    <span class="describe">There are many variations of passages
                                                        of Lorem Ipsum available</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum is simply
                                                    <span class="describe">Lorem Ipsum has been the industry's
                                                        standard dummy text </span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Contrary to popular belief
                                                    <span class="describe">Lorem Ipsum is not simply random text.
                                                        It has roots in a piece of classical Latin literature from 45
                                                        BC</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    The point of using Lorem Ipsum
                                                    <span class="describe">Many desktop publishing packages and
                                                        web page editors now use Lorem Ipsum as their default model
                                                        text</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum
                                                    <span class="describe">There are many variations of passages
                                                        of Lorem Ipsum available</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum is simply
                                                    <span class="describe">Lorem Ipsum has been the industry's
                                                        standard dummy text </span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Contrary to popular belief
                                                    <span class="describe">Lorem Ipsum is not simply random text.
                                                        It has roots in a piece of classical Latin literature from 45
                                                        BC</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    The point of using Lorem Ipsum
                                                    <span class="describe">Many desktop publishing packages and
                                                        web page editors now use Lorem Ipsum as their default model
                                                        text</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum
                                                    <span class="describe">There are many variations of passages
                                                        of Lorem Ipsum available</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.help-dropdown-->
                            <div class="site-header-search-container">
                                <form class="site-header-search closed">
                                    <input type="text" placeholder="Search" />
                                    <button type="submit">
                                        <span class="font-icon-search"></span>
                                    </button>
                                    <div class="overlay"></div>
                                </form>
                            </div>
                        </div>
                        <!--.site-header-collapsed-in-->
                    </div>
                    <!--.site-header-collapsed-->
                </div>
                <!--site-header-content-in-->
            </div>
            <!--.site-header-content-->
        </div>
        <!--.container-fluid-->
    </header>
    <!--.site-header-->





    <!-- ||||||||||
    Left Side Menu
    ||||||||||| -->
    <div class="mobile-menu-left-overlay"></div>
    <nav class="side-menu">

        <div class="mb-4">
            <img src="{{asset('backend/assets/images/profile-pic') . '/' . auth()->user()->image}}" alt="Profile Picture" width="40%" style="display:block;margin:auto;">
            <span style="display:block;text-align:center;margin-top:10px;font-size:15px;color:green">
                {{auth()->user()->name}}
            </span>
            <span style="display:block;text-align:center;font-size:20px;color:green">
                @if (auth()->user()->type == 1)
                    Admin
                @elseif (auth()->user()->type == 2)
                    Staff
                @endif
            </span>
        </div>


        <ul class="side-menu-list">

            <!-- Dashboard -->
            <li class="grey">
                <a href="{{ route('dashboard') }}">
                    <i class="font-icon font-icon-dashboard"></i>
                    <span class="lbl">Dashboard</span>
                </a>
            </li>

            <!-- Area -->
            <li class="purple with-sub">
                <span>
                    <i class="font-icon fa fa-area-chart"></i>
                    <span class="lbl">Area</span>
                </span>
                <ul>
                    <li><a href="{{route('area.create')}}"><span class="lbl">Create Area</span></a></li>
                    <li><a href="{{route('area.index')}}"><span class="lbl">Area List</span></a></li>
                </ul>
            </li>

            <!-- Package -->
            <li class="purple with-sub">
                <span>
                    <i class="font-icon fa fa-balance-scale"></i>
                    <span class="lbl">Package</span>
                </span>
                <ul>
                    <li><a href="{{route('package.create')}}"><span class="lbl">Create Package</span></a></li>
                    <li><a href="{{route('package.index')}}"><span class="lbl">Package List</span></a></li>
                </ul>
            </li>

            <!-- Staff -->
            <li class="purple with-sub">
                <span>
                    <i class="font-icon fa fa-user-plus"></i>
                    <span class="lbl">Staff</span>
                </span>
                <ul>
                    <li><a href="{{route('staff.create')}}"><span class="lbl">Create Staff</span></a></li>
                    <li><a href="{{route('staff.index')}}"><span class="lbl">Staff List</span></a></li>
                </ul>
            </li>

            <!-- Customer -->
            <li class="purple with-sub">
                <span>
                    <i class="font-icon fa fa-users"></i>
                    <span class="lbl">Customer</span>
                </span>
                <ul>
                    <li><a href="{{route('customer.create')}}"><span class="lbl">Create Customer</span></a></li>
                    <li><a href="{{route('customer.index')}}"><span class="lbl">Customer List</span></a></li>
                </ul>
            </li>


            <!-- Company Profile -->
            <li class="red">
                <a href="{{route('company.profile')}}">
                    <i class="font-icon fa fa-building"></i>
                    <span class="lbl">Company Profile</span>
                </a>
            </li>


            <!-- Transaction -->
            <li class="purple with-sub">
                <span>
                    <span class="font-icon fa fa-credit-card"></span>
                    <span class="lbl">Transaction</span>
                </span>
                <ul>
                    
                    <!-- Transaction Option -->
                    <li class="with-sub">
                        <span>
                            <span class="lbl">Transaction Option</span>
                        </span>
                        <ul>
                            <li><a href="{{ route('transaction-option.create') }}"><span class="lbl">Create Transaction Option</span></a></li>
                            <li><a href="{{ route('transaction-option.index') }}"><span class="lbl">View Transaction Option</span></a></li>
                        </ul>
                    </li>

                    <!-- Transaction Type -->
                    <li class="with-sub">
                        <span>
                            <span class="lbl">Transaction Type</span>
                        </span>
                        <ul>
                            <li><a href="{{ route('transaction-type.create') }}"><span class="lbl">Create Transaction Type</span></a></li>
                            <li><a href="{{ route('transaction-type.index') }}"><span class="lbl">View Transaction Type</span></a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            
            <!-- Demo for need -->
            {{-- <li class="purple with-sub">
                <span>
                    <i class="font-icon font-icon-comments active"></i>
                    <span class="lbl">Messages</span>
                </span>
                <ul>
                    <li><a href="messenger.html"><span class="lbl">Messenger</span></a></li>
                    <li><a href="chat.html"><span class="lbl">Messages</span><span
                                class="label label-custom label-pill label-danger">8</span></a></li>
                    <li><a href="chat-write.html"><span class="lbl">Write Message</span></a></li>
                    <li><a href="chat-index.html"><span class="lbl">Select User</span></a></li>
                </ul>
            </li>
            <li class="red">
                <a href="mail.html">
                    <i class="font-icon glyphicon glyphicon-send"></i>
                    <span class="lbl">Mail</span>
                </a>
            </li>
            <li class="grey with-sub">
                <span>
                    <span class="font-icon font-icon-burger"></span>
                    <span class="lbl">Nested Menu</span>
                </span>
                <ul>
                    <li><a href="#"><span class="lbl">Level 1</span></a></li>
                    <li><a href="#"><span class="lbl">Level 1</span></a></li>
                    <li class="with-sub">
                        <span>
                            <span class="lbl">Level 2</span>
                        </span>
                        <ul>
                            <li><a href="#"><span class="lbl">Level 2</span></a></li>
                            <li><a href="#"><span class="lbl">Level 2</span></a></li>
                            <li class="with-sub">
                                <span>
                                    <span class="lbl">Level 3</span>
                                </span>
                                <ul>
                                    <li><a href="#"><span class="lbl">Level 3</span></a></li>
                                    <li><a href="#"><span class="lbl">Level 3</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}

        </ul>

    </nav>
    <!--.side-menu-->



    <!-- ||||||||||||||
    Main content Start
    ||||||||||||||| -->
    <div class="page-content">
        <div class="container-fluid">



            @yield('main-content')



        </div>
        <!--.container-fluid-->
    </div>
    <!--.page-content-->



    <div class="control-panel-container">
        <ul>
            <li class="tasks">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle">
                        <span class="caret-down fa fa-caret-down"></span>
                        <span class="icon fa fa-tasks"></span>
                    </a>
                    <span class="text">Task list</span>
                    <div class="actions">
                        <a href="#">
                            <span class="fa fa-refresh"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-cog"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
                <div class="control-item-content">
                    <div class="control-item-content-text">You don't have pending tasks.</div>
                </div>
            </li>
            <li class="sticky-note">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle">
                        <span class="caret-down fa fa-caret-down"></span>
                        <span class="icon fa fa-file"></span>
                    </a>
                    <span class="text">Sticky Note</span>
                    <div class="actions">
                        <a href="#">
                            <span class="fa fa-refresh"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-cog"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
                <div class="control-item-content">
                    <div class="control-item-content-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut quas sapiente earum, expedita ullam
                        reprehenderit
                    </div>
                </div>
            </li>
            <li class="emails">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle">
                        <span class="caret-down fa fa-caret-down"></span>
                        <span class="icon fa fa-envelope"></span>
                    </a>
                    <span class="text">Recent e-mails</span>
                    <div class="actions">
                        <a href="#">
                            <span class="fa fa-refresh"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-cog"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
                <div class="control-item-content">
                    <section class="control-item-actions">
                        <a href="#" class="link">My e-mails</a>
                        <a href="#" class="mark">Mark visible as read</a>
                    </section>
                    <ul class="control-item-lists">
                        <li>
                            <a href="#">
                                <h6>Welcome to the Community!</h6>
                                <div>Hi, welcome to the my app...</div>
                                <div>
                                    Message text
                                </div>
                            </a>
                            <a href="#" class="reply-all">Reply all</a>
                        </li>
                        <li>
                            <a href="#">
                                <h6>Welcome to the Community!</h6>
                                <div>Hi, welcome to the my app...</div>
                                <div>
                                    Message text
                                </div>
                            </a>
                            <a href="#" class="reply-all">Reply all</a>
                        </li>
                        <li>
                            <a href="#">
                                <h6>Welcome to the Community!</h6>
                                <div>Hi, welcome to the my app...</div>
                                <div>
                                    Message text
                                </div>
                            </a>
                            <a href="#" class="reply-all">Reply all</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="add">
                <div class="control-item-header">
                    <a href="#" class="icon-toggle no-caret">
                        <span class="icon fa fa-plus"></span>
                    </a>
                </div>
            </li>
        </ul>
        <a class="control-panel-toggle">
            <span class="fa fa-angle-double-left"></span>
        </a>
    </div>

    <script src="{{ asset('backend/assets') }}/js/lib/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/lib/popper/popper.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/lib/tether/tether.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/plugins.js"></script>

    <script type="text/javascript" src="{{ asset('backend/assets') }}/js/lib/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend/assets') }}/js/lib/lobipanel/lobipanel.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend/assets') }}/js/lib/match-height/jquery.matchHeight.min.js">
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        $(document).ready(function() {
            $('.panel').each(function() {
                try {
                    $(this).lobiPanel({
                        sortable: true
                    }).on('dragged.lobiPanel', function(ev, lobiPanel) {
                        $('.dahsboard-column').matchHeight();
                    });
                } catch (err) {}
            });

            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataTable = new google.visualization.DataTable();
                dataTable.addColumn('string', 'Day');
                dataTable.addColumn('number', 'Values');
                // A column for custom tooltip content
                dataTable.addColumn({
                    type: 'string',
                    role: 'tooltip',
                    'p': {
                        'html': true
                    }
                });
                dataTable.addRows([
                    ['MON', 130, ' '],
                    ['TUE', 130, '130'],
                    ['WED', 180, '180'],
                    ['THU', 175, '175'],
                    ['FRI', 200, '200'],
                    ['SAT', 170, '170'],
                    ['SUN', 250, '250'],
                    ['MON', 220, '220'],
                    ['TUE', 220, ' ']
                ]);

                var options = {
                    height: 314,
                    legend: 'none',
                    areaOpacity: 0.18,
                    axisTitlesPosition: 'out',
                    hAxis: {
                        title: '',
                        textStyle: {
                            color: '#fff',
                            fontName: 'Proxima Nova',
                            fontSize: 11,
                            bold: true,
                            italic: false
                        },
                        textPosition: 'out'
                    },
                    vAxis: {
                        minValue: 0,
                        textPosition: 'out',
                        textStyle: {
                            color: '#fff',
                            fontName: 'Proxima Nova',
                            fontSize: 11,
                            bold: true,
                            italic: false
                        },
                        baselineColor: '#16b4fc',
                        ticks: [0, 25, 50, 75, 100, 125, 150, 175, 200, 225, 250, 275, 300, 325, 350],
                        gridlines: {
                            color: '#1ba0fc',
                            count: 15
                        }
                    },
                    lineWidth: 2,
                    colors: ['#fff'],
                    curveType: 'function',
                    pointSize: 5,
                    pointShapeType: 'circle',
                    pointFillColor: '#f00',
                    backgroundColor: {
                        fill: '#008ffb',
                        strokeWidth: 0,
                    },
                    chartArea: {
                        left: 0,
                        top: 0,
                        width: '100%',
                        height: '100%'
                    },
                    fontSize: 11,
                    fontName: 'Proxima Nova',
                    tooltip: {
                        trigger: 'selection',
                        isHtml: true
                    }
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(dataTable, options);
            }
            $(window).resize(function() {
                drawChart();
                setTimeout(function() {}, 1000);
            });
        });
    </script>
    <script src="{{ asset('backend/assets') }}/js/app.js"></script>


    @yield('main-script-content')


</body>

</html>
