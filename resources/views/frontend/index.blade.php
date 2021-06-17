@extends('layouts.frontend')

@section('title') A Innovative Software Company @endsection
@section('meta')
    <meta name="author" content="Zakir Soft">
    <meta name="keywords"
        content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description"
        content="We are a web design & development agency in Dhaka, Bangladesh. We provide web design, web development, SPA, SSR & web application, development services.">
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
                        <p> As a software company we develop innovatives website & software solutions. We are proud of what
                            we do.
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
                                <h3 class="p_title">{{ Str::words($item->title, 3) }}</h3>
                                <a target="_blank" class="v_project"
                                    href="{{ route('work_details_website', $item->title_slug) }}">
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
                                    <p> Front-end web development is the practice of converting data to a graphical
                                        interface, through the use of HTML, CSS, and JavaScript, so that users can view and
                                        interact with that data. A front-end web developer is responsible for implementing
                                        visual elements that users see and interact with in a web application. </p>
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
                                    <p>A back-end web developer is responsible for server-side web application logic and
                                        integration of the work front-end web developers do. Back-end developers usually
                                        write web services and APIs used by front-end developers and mobile application
                                        developers. </p>
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
                                    <p> A single-page application (SPA) is a web Application or website that interacts with
                                        the user by dynamically rewriting the current web page with new data from the web
                                        server, instead of the default method of the browser loading entire new pages. The
                                        goal is faster transitions that make the website feel more like a native app. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6  mb-30">
                    <div class="box_wrapper">
                        <div class="card_box">
                            <div class="front_part face">
                                <h2>PWA <span class="text_stroke">Development</span></h2>
                            </div>
                            <div class="back_part face">
                                <div class="box_title">
                                    <h2>PWA Development </h2>
                                    <p> Progressive web apps (PWA) has in combination of the best features of the site and
                                        mobile application built-in it. In practice, this means that such a site can be
                                        accessed by users as well as the application and the most interesting thing is an
                                        Internet connection is not necessary for this. The installation process can be done
                                        in one click directly from the browser. </p>
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
                            "{{ $testimonial->content }}."
                        </div>
                        <h3 class="client_name">{{ $testimonial->name }}</h3>
                        <span class="client_position">{{ $testimonial->position }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="qoute_img">
            <img src="{{ asset('frontend') }}/assets/images/qoute.png" alt="qoute" />
        </div>
    </section>
    <!-- testimonial section end -->
    <!-- Projects Section Start -->
    <section class="p-0">
        <div class="row section_title pt-5">
            <h2 class="pb-0 pt-4">Our Sub Brands</h2>
        </div>
        @foreach ($subcompanies as $company)
            @if ($loop->iteration % 2 == 0)
                <div class="latestProject latestProject--one">
                    <div class="container latestProject__container">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-0">
                                <div class="latestProject__contentText">
                                    <div class="latestProject__logo">
                                        <img src="{{ asset($company->logo) }}" alt="brandLogo" />
                                    </div>
                                    <h5 class="latestProject__title">{{ $company->title }}</h5>
                                    <div class="latestProject__projectInfo">
                                        <div class="latestProject__info">
                                            <h5>{{ $company->stats1_value }}+</h5>
                                            <p>{{ $company->stats1_text }}</p>
                                        </div>
                                        <div class="latestProject__info">
                                            <h5>{{ $company->stats2_value }}+</h5>
                                            <p>{{ $company->stats2_text }}</p>
                                        </div>
                                    </div>
                                    <p class="latestProject__brief">{!! $company->description !!}</p>

                                    <button class="zakirSoft__button">
                                        <a target="_blank" href="{{ $company->link }}">Launch {{ $company->title }}
                                            <span><img src="{{ asset('frontend/assets/images/icons/arrow.png') }}"
                                                    alt="arrow" /></span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-0">
                                <div class="latestProject__imgContent latestProject__imgContent_one">
                                    <img src="{{ asset($company->banner) }}" alt="echotemplate" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="latestProject latestProject--two">
                    <div class="container latestProject__container">
                        <div class="row">
                            <div class="col-lg-6 order-2a order-lg-0">
                                <div class="latestProject__imgContent latestProject__imgContent_two">
                                    <img src="{{ asset($company->banner) }}" alt="codeshiki" />
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-0">
                                <div class="latestProject__contentText latestProject__contentText_two">
                                    <div class="latestProject__logo latestProject__logo_codeshikhi">
                                        <img src="{{ asset($company->logo) }}" alt="brandLogo" />
                                    </div>
                                    <h5 class="latestProject__title">{{ $company->title }}</h5>
                                    <div class="latestProject__projectInfo">
                                        <div class="latestProject__info">
                                            <h5>{{ $company->stats1_value }}+</h5>
                                            <p>{{ $company->stats1_text }}</p>
                                        </div>
                                        <div class="latestProject__info">
                                            <h5>{{ $company->stats2_value }}+</h5>
                                            <p>{{ $company->stats2_text }}</p>
                                        </div>
                                    </div>
                                    <p class="latestProject__brief">{!! $company->description !!}</p>

                                    <button class="zakirSoft__button">
                                        <a target="_blank" href="{{ $company->link }}">Launch {{ $company->title }}
                                            <span><img src="{{ asset('frontend/assets/images/icons/arrow.png') }}"
                                                    alt="arrow" /></span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
    <!-- Projects Section End -->

    <!-- Article/Blog Section Start  -->
    <div class="articles">
        <div class="container">
            <div class="row">
                <div class="section w-100">
                    <h2 class="section__title section__title_one text-center">
                        What’s coming next
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($news_list as $news)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('news.details', ['slug' => $news->slug]) }}">
                            <div class="articles__contentBox card">
                                <div class="articles__contentImg">
                                    <img src="{{ asset($news->image) }}" alt="artilce01" />
                                </div>
                                <div class="articles__contentText">
                                    <h5 class="articles__title"><a
                                            href="{{ route('news.details', ['slug' => $news->slug]) }}">{{ $news->title }}</a>
                                    </h5>
                                    <p class="articles__brief">{!! $news->short_description !!}</p>
                                    <a href="{{ route('news.details', ['slug' => $news->slug]) }}"
                                        class="articles__readMore">Read More
                                        <span><img src="{{ asset('frontend') }}/assets/images/icons/arrow.png"
                                                alt="arrow" /></span>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Article/Blog Section End -->
@endsection

@section('style')
    <style>
        @media(max-width: 767px) {
            #Project .container-fluid .project_slider .slide_item.slick-current.slick-active.slick-center .slide_info.ml {
                padding-left: 0px;
            }

            #about .about_content_wrapper {
                padding-left: 40px;
            }

            #about .about_content_wrapper p {
                margin-right: 0;
            }

            #about_content_2 .about_content_2_img {
                height: auto;
            }
        }

    </style>
@endsection
