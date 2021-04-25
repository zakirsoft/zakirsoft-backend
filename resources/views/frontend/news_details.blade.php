@extends('layouts.frontend')

@section('title') News Details @endsection
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
<section class="newsDetails pt-0">
    <div class="newsDetails__banner"></div>
    <div class="container">
        <div class="newsDetails__contentText">
            <h5 class="newsDetails__title">{{ $news->title }}</h5>
            <p class="newsDetails__brief">{!! $news->description !!}</p>
        </div>
    </div>
</section>

<!-- Article/Blog Section Start  -->
@if ($news_list->count() != 0)
<section class="articles">
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
                <a href="#">
                    <div class="articles__contentBox card">
                        <div class="articles__contentImg">
                            <img src="{{ asset($news->image) }}" alt="artilce01" />
                        </div>
                        <div class="articles__contentText">
                            <h5 class="articles__title"><a href="{{ route('news.details', ['slug' => $news->slug]) }}">{{ $news->title }}</a></h5>
                            <p class="articles__brief">{!! $news->short_description !!}</p>
                            <a href="#" class="articles__readMore">Read More
                                <span><img src="{{ asset('frontend') }}/assets/images/icons/arrow.png" alt="arrow" /></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- Article/Blog Section End -->
@endsection

@section('style')

@endsection
