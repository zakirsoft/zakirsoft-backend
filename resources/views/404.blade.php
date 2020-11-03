<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- =========== Favicon ============ -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/32x32.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/images/logo/64x64.png">

  <!-- =========== SEO Tags ============ -->
  <title> 404 Not Found - Zakir Soft </title>
  <meta name="author" content="Zakir Soft">
  <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
  <meta name="description" content="We are a web design & development company in Dhaka, Bangladesh. We provide web design, web development, SPA, SSR & web application, development services.">
  <meta property="og:title" content="404 Not Found - Zakir Soft" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="assets/images/preview.jpg" />

  <!-- =========== CSS URL ============ -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />
</head>

<body>
  <!-- header section start -->
  <header>
    <div class="container">
      <nav class="head_content">
        <a href="{{ url('/') }}" class="logo">
          <img src="{{ asset('frontend/assets/images/logo/1.png') }}" alt="Zakir Soft">
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
              <li> <a href="{{ route('home_website') }}"> <span>01</span> Home </a> </li>
              <li> <a href="{{ route('about_website') }}" class="active"> <span>02</span> About </a> </li>
              <li> <a href="{{ route('work_website') }}"> <span>03</span> Work </a> </li>
              <li> <a href="{{ route('career_website') }}"> <span>04</span> Career </a> </li>
              <li> <a href="{{ route('contact_website') }}"> <span>05</span> Contact </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-footer">
      <div class="container">
        @php
            $socials = App\Models\Social::all();
        @endphp
        <ul class="footer-social">
            @foreach ($socials as $social)
                <li><a href="{{$social->profile_link}}"><i class="{{$social->social_media}}"></i></a></li>
            @endforeach
        </ul>
        <div class="copyright-text">
            <p>&#169; {{date('Y')}} - Zakirsoft</p>
        </div>
      </div>
    </div>
  </div>
  <!-- header section end -->

  <!-- 404 start -->
  <section id="error_area" class="none text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="error_wrapper">
            <div class="error_img">
              <img src="{{ asset('frontend/assets/images/404.svg') }}" alt="404 images">
            </div>
            <h2>Oops, The page you are looking is not found</h2>
            <div class="404_button">
              <a class="btn" href="{{ url('/') }}">Back to home</a>
            </div>
          </div>
          <div class="bottom">
            <div class="connect_info pb-5">
                @php
                    $footer = App\Models\Footer::get()->first();
                @endphp
                <p>{{$footer->content ?? ''}}</p>
                <span class="email"><b>{{$footer->email ?? ''}}</b></span>
            </div>
            <div class="container">
                @php
                 $socials = App\Models\Social::all();
                @endphp
              <ul class="social_links">
                @foreach ($socials as $social)
                    <li><a href="{{$social->profile_link}}"><i class="{{$social->social_media}}"></i></a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="copyright_text">
            <p>&#169; {{date('Y')}} - Zakirsoft</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 404 end -->


  <!-- all js goes here -->
  <script src="{{ asset('frontend') }}/assets/js/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/app.js"></script>
</body>

</html>
