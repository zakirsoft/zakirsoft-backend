@extends('layouts.frontend')

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
<!-- Main Section Start -->
<section class="careerDetails">
    <div class="container careerDetails__container">
        <!-- Post Title -->
        <div class="careerDetails__postTitleBox">
            <h2 class="careerDetails__title">{{ $post->title }}</h2>
            <div class="careerDetails__type">
                Job Type: <span class="type">{{ $post->type }}</span>
                <span class="point"></span> Salary Range:
                <span class="range">{{ $post->salary }}</span>
            </div>
        </div>
        <!-- Job Descriptions -->
        <div class="careerDetails__contentBox">
           {!! $post->long_description !!}
        </div>
        @php
            $expired = Carbon\Carbon::parse($post->deadline)->format('Y-m-d') >= Carbon\Carbon::now()->toDateString();
        @endphp
        @if ($expired)
            <div class="careerDetails__go">
                <button class="zakirSoft__button zakirSoft__button_primary">
                    <a target="_blank" href="{{ $post->link }}">
                        Apply for this positions
                        <span><img src="{{ asset('frontend') }}/assets/images/icons/whiteArrow.png" alt="arrow" /></span>
                    </a>
                </button>
            </div>
        @endif
    </div>
</section>
<!-- Main Section end -->
@endsection

@section('style')

@endsection
