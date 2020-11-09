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
    <section id="joinus-area" class="none ">
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
    </section>
    <!-- joinus section end -->
@endsection
