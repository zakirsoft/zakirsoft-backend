<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admindek | Admin Template</title>

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

    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('website') }}/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/feather.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="{{ asset('website') }}/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/widget.css">
</head>

<body>


    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="#">
                            Brand Logo
                            <!-- <img class="img-fluid" src="{{asset('website')}}/png/logo.png" alt="Theme-Logo" /> -->
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
                                        <span class="badge bg-c-green">1</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Messages</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('website') }}/jpg/avatar-1.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Murshalin Ridoy</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">11 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('website') }}/jpg/avatar-2.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Khayrul Islam</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('website') }}/jpg/avatar-4.jpg" class="img-radius"
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
                                                <i class="feather icon-mail"></i> My Messages
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

            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="{{asset('website')}}/jpg/avatar-2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                                </p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="{{asset('website')}}/jpg/avatar-2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                        class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">System</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="{{ url('/dashboard') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-home"></i>
                                            </span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
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
                                                        <a href="#"
                                                            class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Option 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="menu-bottom.html" class="waves-effect waves-dark">
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
                                <div class="pcoded-navigation-label">Website</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="#" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-menu"></i>
                                            </span>
                                            <span class="pcoded-mtext">Frontend</span>
                                        </a>
                                    </li>
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
                                                        <a href="#"
                                                            class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Option 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="menu-bottom.html" class="waves-effect waves-dark">
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

    <script src="{{asset('website')}}/js/jquery.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/jquery-ui.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/popper.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/bootstrap.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('website')}}/js/waves.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('website')}}/js/jquery.slimscroll.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('website')}}/js/jquery.flot.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/jquery.flot.categories.js" type="2d8d78e876b340f9029c575b-text/javascript">
    </script>
    <script src="{{asset('website')}}/js/curvedlines.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/jquery.flot.tooltip.min.js" type="2d8d78e876b340f9029c575b-text/javascript">
    </script>

    <script src="{{asset('website')}}/js/amcharts.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/serial.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/light.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('website')}}/js/markerclusterer.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true" type="2d8d78e876b340f9029c575b-text/javascript">
    </script>
    <script src="{{asset('website')}}/js/gmaps.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('website')}}/js/pcoded.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/vertical-layout.min.js" type="2d8d78e876b340f9029c575b-text/javascript">
    </script>
    <script src="{{asset('website')}}/js/crm-dashboard.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('website')}}/js/script.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script src="{{asset('website')}}/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
    </script>
</body>

</body>

</html>