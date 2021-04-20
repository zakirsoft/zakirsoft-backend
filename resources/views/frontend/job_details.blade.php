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
            <h2 class="careerDetails__title">Ui/UX Designer</h2>
            <div class="careerDetails__type">
                Job Type: <span class="type">Full Time</span>
                <span class="point"></span> Salary Range:
                <span class="range">50k to 70k</span>
            </div>
        </div>
        <!-- Job Descriptions -->
        <div class="careerDetails__contentBox">
            <h5 class="careerDetails__contentBox-title">Job Descriptions</h5>
            <p class="careerDetails__contentBox-brief">
                Aenean lacinia efficitur est. Nulla tellus leo, pharetra sit amet
                dictum id, ultrices ac libero. Nam tempus nec nunc gravida dictum.
                Vestibulum tempus finibus magna. Pellentesque a ligula varius,
                tincidunt quam eget, porta ipsum. Donec eleifend vitae sem a
                porttitor. Sed aliquet, nisl ut venenatis molestie, massa ex maximus
                nulla, quis facilisis tortor libero eu purus. Nullam efficitur
                lectus non magna lacinia, facilisis feugiat augue efficitur. Proin
                maximus ultrices massa ultricies interdum.
            </p>
        </div>
        <!-- Responsibilities -->
        <div class="careerDetails__contentBox">
            <h5 class="careerDetails__contentBox-title">Responsibilities</h5>
            <ul class="careerDetails__contentBox-point">
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
            </ul>
        </div>
        <!-- Requirements -->
        <div class="careerDetails__contentBox">
            <h5 class="careerDetails__contentBox-title">Requirements</h5>
            <ul class="careerDetails__contentBox-point">
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
            </ul>
        </div>
        <!-- Salary -->
        <div class="careerDetails__contentBox">
            <h5 class="careerDetails__contentBox-title">Salary Range</h5>
            <span class="careerDetails__contentBox-salery">Gross BDT <b>70,000</b> to <b>1,00,000</b> Per Month</span>
        </div>
        <!-- Benefits -->
        <div class="careerDetails__contentBox">
            <h5 class="careerDetails__contentBox-title">
                Other Benefits We Offer
            </h5>
            <ul class="careerDetails__contentBox-point">
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                </li>
            </ul>
        </div>
        <!-- Jobs Location -->
        <div class="careerDetails__contentBox">
            <h5 class="careerDetails__contentBox-title">Job location</h5>
            <span class="careerDetails__contentBox-location">Home# 1024/N, Road# 17/A, Adabor, Dhaka-1207</span>
        </div>

        <div class="careerDetails__go">
            <button class="zakirSoft__button zakirSoft__button_primary">
                <a href="#">
                    Apply for this positions

                    <span><img src="{{ asset('frontend') }}/assets/images/icons/whiteArrow.png" alt="arrow" /></span>
                </a>
            </button>
        </div>
    </div>
</section>
<!-- Main Section end -->
@endsection

@section('style') 

@endsection
