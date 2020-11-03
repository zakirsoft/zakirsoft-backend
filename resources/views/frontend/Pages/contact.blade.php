@extends('frontend.master')

@section('title') Contact Us @endsection
@section('meta')
    <meta name="author" content="Zakir Soft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="We are engertic team of designers and developers. We work with Python, PHP, Laravel, PostgreSQL, MYSQL, React.js, Vue.js, Nuxt.js, Next.js, Cloud Server. We are open to application, join us.">
    <meta property="og:title" content="Career - Zakir Soft" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('frontend') }}/assets/images/preview.jpg" />
@endsection
@section('contact') active @endsection
@section('contact_footer') active @endsection

@section('content')

  <!-- joinus section start -->
  <section id="joinus-contact_area" class="none">
    <div class="round_shape_img">
      <img src="{{ asset('frontend') }}/assets/images/shape/shadow.png" alt="shaddow_ibackground">
    </div>
    <div class="container">
      <div class="row section_title">
        <h2>Contact us</h2>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="contact_form text-center">
            @livewire('contact')
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- joinus section end -->
@endsection
@section('website_style') @livewireStyles @endsection
@section('website_script') @livewireScripts @endsection


