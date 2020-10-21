@extends('frontend.master')

@section('content')
      <!-- about-us section start -->
    <section id="about" class="none">
        <div class="container">
          <div class="row section_title">
            <h2>About us</h2>
          </div>
          <div
            class="row about_content align-items-center justify-content-center"
          >
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="about_content_img">
                    <img
                      src="{{ asset('frontend') }}/assets/images/about/about.png"
                      alt="img"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="about_content_img_1">
                    <img
                      src="{{ asset('frontend') }}/assets/images/about/about3.png"
                      alt="img"
                      class="img-fluid"
                    />
                  </div>
                  <div class="play_video">
                    <a href="#">
                      <span class="play_icon"
                        ><img src="{{ asset('frontend') }}/assets/images/icon.png" alt="icon" /> Play
                        Video</span
                      >
                    </a>
                  </div>
                </div>
                <div class="col-8">
                  <div class="about_content_img_2">
                    <img
                      src="{{ asset('frontend') }}/assets/images/about/about2.png"
                      alt="img"
                      class="img-fluid"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about_content_wrapper">
                <h3>Who We are</h3>
                <p>
                  Integer at faucibus urna. Nullam condimentum leo id elit
                  sagittis auctor. Curabitur elementum nunc a leo imperdiet, nec
                  elementum diam elementum. Etiam elementum euismod commodo. Proin
                  eleifend eget quam ut efficitur. Mauris a accumsan mauris.
                  Phasellus egestas et risus sit amet hendrerit. Nulla facilisi.
                  <br /><br />
                  Cras urna sem, vulputate sed condimentum a, posuere vel enim.
                  Integer at faucibus urna.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about-us 2 section end -->
      <section id="about_content_2" class="none">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-0 order-2">
              <div class="office_content_wrapper">
                <h3>About zakirsoft</h3>
                <p>
                  Integer at faucibus urna. Nullam condimentum leo id elit
                  sagittis auctor. Curabitur elementum nunc a leo imperdiet, nec
                  elementum diam elementum. Etiam elementum euismod commodo. Proin
                  eleifend eget quam ut efficitur. Mauris a accumsan mauris.
                </p>
                <a href="#" class="button">Join Our Team</a>
              </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1 r_space">
              <div class="about_content_2_img">
                <img
                  src="{{ asset('frontend') }}/assets/images/about/office.png"
                  alt="office images"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about-us section end -->

      <!-- Team section start -->
      <section id="team" class="none">
        <div class="container">
          <div class="row section_title">
            <h2>Our Team</h2>
          </div>
          <div class="row team_content">

            @foreach ($teams as $team)
            <div class="col-md-6">
                <div class="team_card text-center">
                  <div class="members_img">
                    <img
                  src="{{asset($team->image)}}"
                      alt="team-members"
                      class="img-fluid"
                    />
                  </div>
                  <div class="member_position">
                  <h3 class="name">{{ $team->name }}</h3>
                  <span class="position">{{ $team->position }}</span>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
        </div>
      </section>
      <!-- Team section end -->
@endsection

