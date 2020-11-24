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
                <div class="col-12 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2278794778513!2d90.34898411530806!3d23.774898293756173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1e1938cc90b%3A0xbcfacb6b89117685!2sZakir%20Soft!5e0!3m2!1sen!2sbd!4v1606209157115!5m2!1sen!2sbd"
                        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contact-right">
                        <h3>Our Contact Information</h3>
                        <hr>
                        <div class="content mt-4">
                            <p>
                                <Strong>Phone: </Strong> +88 01625 59 25 66
                            </p>
                            <p>
                                <Strong>Email: </Strong> zakirsoft20@gmail.com
                            </p>
                            <p>
                                <strong>Address: </strong> Home# 1024/N, Road# 17/A, Adabor, Dhaka-1207
                            </p>
                            <ul class="social_links">
                                @foreach ($socials as $social)
                                <li>
                                    <a target="_blank" href="{{ $social->profile_link }}"><i class="{{ $social->social_media }}"></i></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12">
                    <div class="contact_form text-center">
                        @livewire('contact')
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- joinus section end -->
@endsection

@section('style') 
<style>
    #joinus-contact_area {
        padding-bottom: 0px;
    }
    
    .contact-right .social_links {
        justify-content: flex-start;
    }
    .social_links li {
        margin: 0;
        border: 1px solid #7a849a;
        width: 40px;
        height: 40px;
        line-height: 40px;
        transition: all 0.3s linear;
        margin-right: 5px !important;
    }
    .social_links li:hover {
        border-color: #007bff;
    }
    
    .social_links li a i{
        font-size: 16px;
        transition: all 0.6s ease-in-out; 
    }
    .social_links li::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        z-index: -1;
        border-radius: 50%;
        border-radius: 50%;
        transform: scale(0);
        transition: all 0.3s linear;
    }
</style>
@endsection
@section('script') @livewireScripts @endsection
