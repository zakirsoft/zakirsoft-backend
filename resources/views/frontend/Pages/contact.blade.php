@extends('frontend.master')

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
