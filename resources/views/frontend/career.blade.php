@extends('layouts.frontend')

@section('title') Career @endsection
@section('meta')
    <meta name="author" content="Zakir Soft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="We are engertic team of designers and developers. We work with Python, PHP, Laravel, PostgreSQL, MYSQL, React.js, Vue.js, Nuxt.js, Next.js, Cloud Server. We are open to application, join us.">
    <meta property="og:title" content="Career - Zakir Soft" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('frontend') }}/assets/images/preview.jpg" />
@endsection
@section('career') active @endsection
@section('career_footer') active @endsection

@section('content')
    <!-- joinus section start -->
    {{-- <section id="joinus-area" class="none ">
        <div class="container">
            <div class="row section_title">
                <h2>Join us</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    @foreach ($career as $item)
                    <div class="row join_team">
                        <div class="col-lg-6 col-12">
                            <div class="join-designer">
                                <h2>{{ $item->title }}</h2>
                                <p>{{ $item->content }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="join-designer-button text-lg-right">
                                <a target="_blank" class="button" href="{{ route('contact_website') }}">I want this position</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    <!-- joinus section end -->
    <section class="careerTeam">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-0">
                    <div class="careerTeam__contentText">
                        <h5 class="careerTeam__title">Join Our Team</h5>
                        <p class="careerTeam__brief">
                            Curabitur mollis elit eu libero eleifend, a aliquet magna
                            consectetur. Fusce at accumsan quam. Ut maximus facilisis libero
                            sit amet viverra. Nullam eu rutrum ex. Nullam consectetur turpis
                            mi, id egestas urna mattis et.
                        </p>
                        <button class="zakirSoft__button px-4">
                            <a href="career.html#positions"> view all position </a>
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
            <div class="row">
                <div class="section">
                    <h5 class="section__title section__title_two">Perks & Benefits</h5>
                    <p class="section__brief">
                        Aenean vitae interdum leo. Donec luctus nulla eget leo fringilla
                        sollicitudin. Phasellus imperdiet nisl ut auctor ultricies. Morbi
                        vehicula, lorem ac consectetur accumsa
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
            <div class="row">
                <div class="section">
                    <h5 class="section__title section__title_two">Our Gallery</h5>
                    <p class="section__brief">
                        Aenean vitae interdum leo. Donec luctus nulla eget leo fringilla
                        sollicitudin. Phasellus imperdiet nisl ut auctor ultricies. Morbi
                        vehicula, lorem ac consectetur accumsa
                    </p>
                </div>
            </div>
            <div class="row gallery__itemContents">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4">
                        <a class="gallery__item" href="{{ asset($gallery->image) }}">
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
            <div class="row">
                <div class="section">
                    <h5 class="section__title section__title_two">
                        All open positions
                    </h5>
                    <p class="section__brief">
                        Aenean vitae interdum leo. Donec luctus nulla eget leo fringilla
                        sollicitudin. Phasellus imperdiet nisl ut auctor ultricies. Morbi
                        vehicula, lorem ac consectetur accumsa
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
