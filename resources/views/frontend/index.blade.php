@extends('layouts.frontend')

@section('title') A Innovative Software Company @endsection
@section('meta')
    <meta name="author" content="Zakir Soft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="We are a web design & development company in Dhaka, Bangladesh. We provide web design, web development, SPA, SSR & web application, development services.">
    <meta property="og:title" content="Zakir Soft - Website Design and Development Company in Dhaka, Bangladesh" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('frontend') }}/assets/images/preview.jpg" />
@endsection

@section('home') active @endsection
@section('home_footer') active @endsection

@section('content')
  <!-- banner section start -->
  <section id="banner" class="none">
    <!-- shaddow round img -->
    <div class="round_shape_img">
      <img src="{{ asset('frontend') }}/assets/images/Shadow.png" alt="shaddow_ibackground">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-7 order-2 order-xl-0">
          <div class="banner_wrapper">
            <h2>
              We are here to <br />
              grow your <br /><span class="text_stroke">Business.</span>
            </h2>
            <p> As a software company we develop innovatives website & software solutions. We are proud of what we do.
            </p>
            <a target="_blank" class="button" href="{{ route('work_website') }}">View Projects</a>
          </div>
        </div>
        <div class="col-xl-5 order-1 order-xl-0">
          <div class="banner_img">
            <img src="{{ asset('frontend') }}/assets/images/Inllustration.svg" alt="Ilustrator-img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- work section start -->
  <section id="Project" class="none">
    <div class="container-fluid">
      <div class="row section_title">
        <h2>our Works</h2>
      </div>

      <div class="row project_slider">
        @foreach ($portfolio as $item)
        <div class="slide_item row">
          <div class="col-lg-4  col-12 order-lg-0 order-2">
            <div class="slide_info ml">
              <span class="p_type">{{ $item->category->name }}</span>
              <h3 class="p_title">{{ Str::words($item->title,3) }}</h3>
              <a target="_blank" class="v_project" href="{{ route('work_details_website', $item->id) }}">
                <span>View Project</span>
                <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="project-img" />
              </a>
            </div>
          </div>
          <div class="col-lg-8 col-12 order-lg-0 order-1">
            <div class="project_img">
              <img src="{{ asset($item->image) }}" alt="project-img" />
            </div>
          </div>
        </div>
        @endforeach
        </div>
      <h4 class="drag_text">Drag</h4>
    </div>
  </section>
  <!-- work section end -->

  <!-- what-do section start -->
  <section id="WE_Do" class="none">

    <div class="container">
      <div class="row section_title">
        <h2>What we do</h2>
      </div>
      <div class="row">
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>Frontend <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>Frontend Development</h2>
                  <p> Front-end web development is the practice of converting data to a graphical interface, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that data. A front-end web developer is responsible for implementing visual elements that users see and interact with in a web application. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>Backend <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>Backend Development</h2>
                  <p>A back-end web developer is responsible for server-side web application logic and integration of the work front-end web developers do. Back-end developers usually write web services and APIs used by front-end developers and mobile application developers. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>SPA <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>SPA Development</h2>
                  <p> A single-page application (SPA) is a web Application or website that interacts with the user by dynamically rewriting the current web page with new data from the web server, instead of the default method of the browser loading entire new pages. The goal is faster transitions that make the website feel more like a native app. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>SSR <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>SSR  Development </h2>
                  <p> Server-side rendering (SSR), is the ability of an application to contribute by displaying the web-page on the server instead of rendering it in the browser. Server-side sends a fully rendered page to the client; the client’s JavaScript bundle takes over and allows the SPA framework to operate. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="round_shape_img">
      <img src="{{ asset('frontend') }}/assets/images/shape/shadow_5.png" alt="">
    </div>
  </section>
  <!-- what-do section end -->

  <!-- brand section start -->
  <section id="brand_area" class="none">
    <div class="container">
      <div class="brand_slider">
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/Adobe.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/Sketch.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/Spotify.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/google.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/amazon.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/Firefox.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="{{ asset('frontend') }}/assets/images/partner/Apple icon.png" alt="brand logo" />
        </div>
      </div>
    </div>
  </section>
  <!-- brand section end -->

  <!-- testimonial section start -->


  <section id="testimonial-area" class="none">
    <div class="container">
      <div class="row section_title">
        <h2>Testimonials</h2>
      </div>
      <div class="row testimonial_slider">
        @foreach ($testimonials as $testimonial)
        <div class="slide_item">
          <div class="content_text">
            "{{$testimonial->content}}."
          </div>
          <h3 class="client_name">{{$testimonial->name}}</h3>
          <span class="client_position">{{$testimonial->position}}</span>
        </div>
        @endforeach
      </div>
    </div>
    <div class="qoute_img">
      <img src="{{ asset('frontend') }}/assets/images/qoute.png" alt="qoute" />
    </div>
  </section>
  <!-- testimonial section end -->

@endsection
