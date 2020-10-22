@extends('frontend.master')

@section('home') active @endsection
@section('home_footer') footer_active @endsection

@section('content')
          <!-- banner section start -->
          <section id="banner" class="none">
            <div class="container">
              <div class="row">
                <div class="col-xl-7 order-2 order-xl-0">
                  <div class="banner_wrapper">
                    <h2>
                      We are here to <br />
                      grow your <br /><span class="text_stroke">Business.</span>
                    </h2>
                    <p>
                      Curabitur vulputate arcu odio, ac facilisis diam accumsan ut. Ut
                      imperdiet et leo in vulputate.
                    </p>
                    <a class="button" href="#">View Projects</a>
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
          <!-- banner section end -->

          <!-- work section start -->
          <section id="Project" class="none">
            <div class="container-fluid">
              <div class="row section_title">
                <h2>our Work</h2>
              </div>
              <div class="row project_slider">

                @foreach ($portfolio as $item)
                <div class="slide_item col-12">
                    <div class="col-4">
                        <div class="slide_info">
                      <span class="p_type">{{ $item->category->name }}</span>
                      <h3 class="p_title">{{ Str::words($item->title,3) }}</h3>
                      {{-- <h3 class="p_title">{{ str_limit($item->title,10,'&raquo;') }}</h3> --}}
                      <a class="v_project" href="#">
                          <span>View Project</span>
                          <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="project_img">
                        <img
                        src="{{ asset($item->image) }}"
                        alt="project-img"
                        />
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
                <div class="col-lg-6 col-12 mb-30">
                  <div class="box_wrapper">
                    <div class="card_box">
                      <div class="front_part">
                        <h2>Front end <span class="text_stroke">Developer</span></h2>
                      </div>
                      <div class="back_part">
                        <div class="box_title">
                          <h2>Front end Developer</h2>
                          <p>
                            Aliquam in bibendum mauris. Sed vitae erat vel velit
                            blandit pharetra vitae nec ante. Cras at est augue. Cras
                            ut interdum elit.
                          </p>
                          <a href="#"
                            >Read More
                            <img
                              src="{{ asset('frontend') }}/assets/images/arrow.png"
                              alt="Arrow"
                              class="img-fluid"
                          /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mb-30">
                  <div class="box_wrapper">
                    <div class="card_box">
                      <div class="front_part">
                        <h2>Front end <span class="text_stroke">Developer</span></h2>
                      </div>
                      <div class="back_part">
                        <div class="box_title">
                          <h2>Front end Developer</h2>
                          <p>
                            Aliquam in bibendum mauris. Sed vitae erat vel velit
                            blandit pharetra vitae nec ante. Cras at est augue. Cras
                            ut interdum elit.
                          </p>
                          <a href="#"
                            >Read More
                            <img
                              src="{{ asset('frontend') }}/assets/images/arrow.png"
                              alt="Arrow"
                              class="img-fluid"
                          /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mb-30">
                  <div class="box_wrapper">
                    <div class="card_box">
                      <div class="front_part">
                        <h2>Front end <span class="text_stroke">Developer</span></h2>
                      </div>
                      <div class="back_part">
                        <div class="box_title">
                          <h2>Front end Developer</h2>
                          <p>
                            Aliquam in bibendum mauris. Sed vitae erat vel velit
                            blandit pharetra vitae nec ante. Cras at est augue. Cras
                            ut interdum elit.
                          </p>
                          <a href="#"
                            >Read More
                            <img
                              src="{{ asset('frontend') }}/assets/images/arrow.png"
                              alt="Arrow"
                              class="img-fluid"
                          /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="box_wrapper">
                    <div class="card_box">
                      <div class="front_part">
                        <h2>Front end <span class="text_stroke">Developer</span></h2>
                      </div>
                      <div class="back_part">
                        <div class="box_title">
                          <h2>Front end Developer</h2>
                          <p>
                            Aliquam in bibendum mauris. Sed vitae erat vel velit
                            blandit pharetra vitae nec ante. Cras at est augue. Cras
                            ut interdum elit.
                          </p>
                          <a href="#"
                            >Read More
                            <img
                              src="{{ asset('frontend') }}/assets/images/arrow.png"
                              alt="Arrow"
                              class="img-fluid"
                          /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="slide_item">
                  <div class="content_text">
                    "Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo
                    elit, pharetra bibendum justo quis, cursus consectetur erat. Sed
                    nec posuere turpis. Maecenas nec bibendum purus. Nulla fringilla,
                    lorem iaculis iaculis fermentum, ligula nibh mollis ipsum, et
                    scelerisque risus ante eu sem. Phasellus ac sagittis nisi.
                    Suspendisse potenti."
                  </div>
                  <h3 class="client_name">Frank Wagner</h3>
                  <span class="client_position">CEO of Invision</span>
                </div>
                <div class="slide_item">
                  <div class="content_text">
                    "Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo
                    elit, pharetra bibendum justo quis, cursus consectetur erat. Sed
                    nec posuere turpis. Maecenas nec bibendum purus. Nulla fringilla,
                    lorem iaculis iaculis fermentum, ligula nibh mollis ipsum, et
                    scelerisque risus ante eu sem. Phasellus ac sagittis nisi.
                    Suspendisse potenti."
                  </div>
                  <h3 class="client_name">Frank Wagner</h3>
                  <span class="client_position">CEO of Invision</span>
                </div>
                <div class="slide_item">
                  <div class="content_text">
                    "Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo
                    elit, pharetra bibendum justo quis, cursus consectetur erat. Sed
                    nec posuere turpis. Maecenas nec bibendum purus. Nulla fringilla,
                    lorem iaculis iaculis fermentum, ligula nibh mollis ipsum, et
                    scelerisque risus ante eu sem. Phasellus ac sagittis nisi.
                    Suspendisse potenti."
                  </div>
                  <h3 class="client_name">Frank Wagner</h3>
                  <span class="client_position">CEO of Invision</span>
                </div>
                <div class="slide_item">
                  <div class="content_text">
                    "Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo
                    elit, pharetra bibendum justo quis, cursus consectetur erat. Sed
                    nec posuere turpis. Maecenas nec bibendum purus. Nulla fringilla,
                    lorem iaculis iaculis fermentum, ligula nibh mollis ipsum, et
                    scelerisque risus ante eu sem. Phasellus ac sagittis nisi.
                    Suspendisse potenti."
                  </div>
                  <h3 class="client_name">Frank Wagner</h3>
                  <span class="client_position">CEO of Invision</span>
                </div>
                <div class="slide_item">
                  <div class="content_text">
                    "Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo
                    elit, pharetra bibendum justo quis, cursus consectetur erat. Sed
                    nec posuere turpis. Maecenas nec bibendum purus. Nulla fringilla,
                    lorem iaculis iaculis fermentum, ligula nibh mollis ipsum, et
                    scelerisque risus ante eu sem. Phasellus ac sagittis nisi.
                    Suspendisse potenti."
                  </div>
                  <h3 class="client_name">Frank Wagner</h3>
                  <span class="client_position">CEO of Invision</span>
                </div>
              </div>
            </div>
            <div class="qoute_img">
              <img src="{{ asset('frontend') }}/assets/images/qoute.png" alt="qoute" />
            </div>
          </section>
          <!-- testimonial section end -->
@endsection
