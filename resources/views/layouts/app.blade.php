<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title', 'Dashboard | ZakirSoft')</title>

    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/feather.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/widget.css">
</head>

<body>


    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            Brand Logo
                            <!-- <img class="img-fluid" src="{{asset('admin')}}/png/logo.png" alt="Theme-Logo" /> -->
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                                    class="waves-effect waves-light" data-cf-modified-2d8d78e876b340f9029c575b-="">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">2</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Messages</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('admin') }}/jpg/avatar-1.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('admin') }}/jpg/avatar-2.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('admin') }}/jpg/avatar-4.jpg" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">System</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="@yield('dashboard')">
                                        <a href="{{ url('/dashboard') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-home"></i>
                                            </span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="pcoded-navigation-label">admin</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">Portfolio</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">New Portfolio</span>
                                                </a>
                                            </li>
                                            <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Portfolio List</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu @yield('testimonial')">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="far fa-file-word"></i></span>
                                            <span class="pcoded-mtext">Testimonial</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{ route('testimonial.create') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add One</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('testimonial.index') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Testimonials</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu @yield('contact')">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="far fa-address-card"></i></span>
                                            <span class="pcoded-mtext">Contact</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{ route('contact.index') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Message</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <div class="pcoded-navigation-label">Management</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">Members</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Users</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Role</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <div class="pcoded-navigation-label">Example</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">Dropdown</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Dropdown</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Option 1</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Option 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Option 1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="#" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-menu"></i>
                                            </span>
                                            <span class="pcoded-mtext">Option</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>



                    {{-- Body Text Here --}}

                    @yield('content')

                    {{-- Body Text Here --}}




                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin')}}/js/jquery.min.js"></script>
    <script src="{{asset('admin')}}/js/jquery-ui.min.js"></script>
    <script src="{{asset('admin')}}/js/popper.min.js"></script>
    <script src="{{asset('admin')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/js/waves.min.js"></script>
    <script src="{{asset('admin')}}/js/jquery.slimscroll.js"></script>
    <script src="{{asset('admin')}}/js/jquery.flot.js"></script>
    <script src="{{asset('admin')}}/js/jquery.flot.categories.js"></script>
    <script src="{{asset('admin')}}/js/curvedlines.js"></script>
    <script src="{{asset('admin')}}/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('admin')}}/js/amcharts.js"></script>
    <script src="{{asset('admin')}}/js/serial.js"></script>
    <script src="{{asset('admin')}}/js/light.js"></script>
    <script src="{{asset('admin')}}/js/markerclusterer.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('admin')}}/js/gmaps.js"></script>
    <script src="{{asset('admin')}}/js/pcoded.min.js"></script>
    <script src="{{asset('admin')}}/js/vertical-layout.min.js"></script>
    <script src="{{asset('admin')}}/js/crm-dashboard.min.js"></script>
    <script src="{{asset('admin')}}/js/script.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script src="{{asset('admin')}}/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
    </script>
</body>

</body>

</html>
