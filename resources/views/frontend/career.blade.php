@extends('layouts.frontend')

@section('title') Career @endsection
@section('meta')
    <meta name="author" content="Zakirsoft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="Learn more about company and our team. Check our latest opening jobs, you might be interested in.">
    <meta property="og:title" content="Career - Zakirsoft" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('frontend') }}/assets/images/preview.jpg" />
@endsection
@section('career') active @endsection
@section('career_footer') active @endsection

@section('content')
    <!-- joinus section end -->
    <section class="careerTeam">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-2 order-lg-0">
                    <div class="careerTeam__contentText">
                        <h5 class="careerTeam__title">Join Our Team</h5>
                        <p class="careerTeam__brief">
                            Zakirsoft is growing Company with a 4 team ready to make the impossible possible. We work together in a friendly envrionment where the magic happens. We believe, Our team is our comapany's best assets and we take care of it. 
                        </p>
                        <button class="zakirSoft__button px-4">
                            <a href="#positions"> View all position </a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="careerTeam__contentImg">
                        <img src="{{ asset('frontend') }}/assets/images/banner/Working late-bro.png" alt="contentImg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="perks">
        <div class="container perks__container">
            <div class="row justify-content-center">
                <div class="section">
                    <h5 class="section__title section__title_two">Perks & Benefits</h5>
                    <p class="section__brief">
                        Check out what Zakirsoft provides to individual team member and how we support our team member. 
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="perks__benefitsBoxes">
                    <div class="box">
                        <img src="{{ asset('frontend') }}/assets/images/perks/demo-01.png" alt="demo" />
                        <h5 class="box__title">
                            Friendly <br />
                            Environments
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend') }}/assets/images/perks/demo-02.png" alt="demo" />
                        <h5 class="box__title">
                            Competitive <br />
                            Salary
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend') }}/assets/images/perks/demo-03.png" alt="demo" />
                        <h5 class="box__title">
                            Healthy Food & <br />
                            Snacks
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend') }}/assets/images/perks/demo-04.png" alt="demo" />
                        <h5 class="box__title">
                            Learning & <br />
                            Developments
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend') }}/assets/images/perks/demo-05.png" alt="demo" />
                        <h5 class="box__title">
                            Personal Career <br />
                            Growth
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section Start -->
    <section class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section">
                    <h5 class="section__title section__title_two">Our Gallery</h5>
                    <p class="section__brief">
                        Take a peek in our gallery consisting of where we work, how do we work and what do we do. 
                    </p>
                </div>
            </div>
            <div class="row gallery__itemContents">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4">
                        <a class="gallery__item" style="display: inline-block;margin-bottom: 30px;" href="{{ asset($gallery->image) }}">
                            <img src="{{ asset($gallery->image) }}" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <section class="positions" id="positions">
        <div class="container positions__container">
            <div class="row justify-content-center">
                <div class="section">
                    <h5 class="section__title section__title_two">
                        All open positions
                    </h5>
                    <p class="section__brief">
                        We are very excited to have you in our team. Check our open position. If you don't find yourself a position that fits your skills <a href="https://forms.gle/CzUE6PDwN5zGyayA7" target="_blank"> Apply here </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="positions__item">
                    @foreach ($posts as $post)
                        <div class="positions__contentBox">
                            <div class="postions__left">
                                <h5 class="positions__title">{{ $post->title }}</h5>
                                <div class="positions__type">
                                    Job Type: <span class="type">{{ $post->type }}</span>
                                    <span class="point"></span> Salary Range:
                                    <span class="range">{{ $post->salary }}</span>
                                </div>
                                <div class="positions__responsiblity">{!! $post->short_description !!}</div>
                            </div>
                            <div class="positions__right">
                                <button class="zakirSoft__button">
                                    @php
                                        $expired = Carbon\Carbon::parse($post->deadline)->format('Y-m-d') >= Carbon\Carbon::now()->toDateString();
                                    @endphp

                                    @if ($expired)
                                        <a href="{{ route('job.details', ['slug' => $post->slug]) }}">
                                            I want this position
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </a>
                                    @else
                                        <a href="{{ route('job.details', ['slug' => $post->slug]) }}">
                                            Deadline Expired
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </a>
                                    @endif
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/simple-lightbox.min.css">
@endsection

@section('script')
<script src="{{ asset('frontend') }}/assets/js/simple-lightbox.jquery.min.js"></script>
<script>
    $(function(){
        var gallery = $('.gallery__item').simpleLightbox({navText:    ['&lsaquo;','&rsaquo;']});
    });
</script>
@endsection
