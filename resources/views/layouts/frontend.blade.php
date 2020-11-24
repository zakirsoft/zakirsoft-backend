<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title') - Zakir Soft</title>

    <!-- =========== SEO Tags ============ -->
    @yield('meta')

    <!-- =========== Favicon ============ -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend') }}/assets/images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend') }}/assets/images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('frontend') }}/assets/images/logo/64x64.png">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />
    {{-- @livewireStyles --}}
    @yield('style')

    <style>
        #toast-container>:hover {
            opacity: 1;
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }

        #WE_Do .container .box_wrapper .card_box .face.back_part .box_title p {
            line-height: 30px;
            margin-bottom: 0;
        }
    </style>
     {!! $content->head_content !!}
</head>

<body>
    <!-- header section start -->
    <header>
        <div class="container">
            <nav class="head_content">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('frontend') }}/assets/images/logo/1.png" alt="Zakir Soft">
                </a>
                <div class="menu">
                    <ul class="m_bar">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Menus -->
    <div class="fullscreen-menu">
        <div class="menu-body">
            <div class="container">
                <div class="menu-container">
                    <div class="menu-close">
                        <ul class="close-bar">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li> <a href="{{ route('home_website') }}" class="@yield('home')"> <span>01</span> Home </a>
                            </li>
                            <li> <a href="{{ route('about_website') }}" class="@yield('about')"> <span>02</span> About
                                </a> </li>
                            <li> <a href="{{ route('work_website') }}" class="@yield('work')"> <span>03</span> Works
                                </a>
                            </li>
                            <li> <a href="{{ route('career_website') }}" class=" @yield('career')"> <span>04</span>
                                    Career
                                </a> </li>
                            <li> <a href="{{ route('contact_website') }}" class="@yield('contact')"> <span>05</span>
                                    Contact </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <ul class="footer-social">
                    @foreach ($socials as $social)
                    <li>
                        <a target="_blank" href="{{$social->profile_link}}"><i class="{{$social->social_media}}"></i></a>
                    </li>
                    @endforeach
                </ul>
                <div class="copyright-text">
                    <p> &copy; {{date('Y')}} - Zakirsoft </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- main section start -->
    @yield('content')
    <!-- main section end -->

    <!-- footer section start -->
    <footer id="footer_area" class="none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_menu">
                        <span>Quick Link</span>
                        <ul class="nav_links">
                            <li class="nav_items"><a href="{{ route('home_website') }}" class="@yield('home_footer')">Home</a></li>
                            <li class="nav_items"><a href="{{ route('about_website') }}" class="@yield('about_footer')">About</a></li>
                            <li class="nav_items"><a href="{{ route('work_website') }}" class="@yield('work_footer')" @yield('_footer')>works</a></li>
                            <li class="nav_items"><a href="{{ route('career_website') }}" class="@yield('career_footer')">Career</a></li>
                            <li class="nav_items"><a href="{{ route('contact_website') }}" class="@yield('contact_footer')">Contact</a></li>
                        </ul>
                    </div>
                    <div class="connect_info">
                        <h4>Connect With us</h4>
                        <p>
                            {!! $content->content ?? '' !!}
                        </p>
                        <span class="email">{{ $content->email ?? '' }}</span>
                    </div>
                    <div>
                        <ul class="social_links">
                            @foreach ($socials as $social)
                            <li>
                                <a target="_blank" href="{{ $social->profile_link }}"><i class="{{ $social->social_media }}"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright_text">
                        <p>&#169; {{date('Y')}} - Zakirsoft</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- all js goes here -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/app.js"></script>
    @yield('script')

    {!! $content->body_content !!}
</body>

</html>
