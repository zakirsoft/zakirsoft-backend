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
<section class="newsDetails pt-0">
    <div class="newsDetails__banner"></div>
    <div class="container">
        <div class="newsDetails__contentText">
            <h5 class="newsDetails__title">
                Curabitur mollis elit eu libero eleifend, a aliquet magna
            </h5>
            <p class="newsDetails__brief">
                Curabitur mollis elit eu libero eleifend, a aliquet magna
                consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit
                amet viverra. Nullam eu rutrum ex. Nullam consectetur turpis mi, id
                egestas urna mattis et. Curabitur mollis elit eu libero eleifend, a
                aliquet magna consectetur. Fusce at accumsan quam. Ut maximus
                facilisis libero sit amet viverra. Nullam eu rutrum ex. Nullam
                consectetur turpis mi, id egestas urna mattis et.Curabitur mollis
                elit eu libero eleifend, a aliquet magna consectetur. Fusce at
                accumsan quam.
                <br /><br />
                Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.
                Nullam consectetur turpis mi, id egestas urna mattis et.Curabitur
                mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce
                at accumsan quam. Ut maximus facilisis libero sit amet viverra.
                Nullam eu rutrum ex. Nullam consectetur turpis.
            </p>
        </div>
    </div>
</section>

<!-- Article/Blog Section Start  -->
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
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="articles__contentBox card">
                        <div class="articles__contentImg">
                            <img src="{{ asset('frontend') }}/assets/images/Articles/demo-01.png " alt="artilce01" />
                        </div>
                        <div class="articles__contentText">
                            <h5 class="articles__title"><a href="#">We are Hiring</a></h5>
                            <p class="articles__brief">
                                Curabitur mollis elit eu libero eleifend, a aliquet magna
                                consectetur. Fusce at accumsan quam. Ut maximus facilisis
                                libero sit amet viverra. Nullam eu rutrum ex.
                            </p>
                            <a href="#" class="articles__readMore">Read More
                                <span><img src="{{ asset('frontend') }}/assets/images/icons/arrow.png" alt="arrow" /></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="articles__contentBox card">
                        <div class="articles__contentImg">
                            <img src="{{ asset('frontend') }}/assets/images/Articles/demo-02.png " alt="artilce01" />
                        </div>
                        <div class="articles__contentText">
                            <h5 class="articles__title"><a href="#">We are Hiring</a></h5>
                            <p class="articles__brief">
                                Curabitur mollis elit eu libero eleifend, a aliquet magna
                                consectetur. Fusce at accumsan quam. Ut maximus facilisis
                                libero sit amet viverra. Nullam eu rutrum ex.
                            </p>
                            <a href="#" class="articles__readMore">Read More
                                <span><img src="{{ asset('frontend') }}/assets/images/icons/arrow.png" alt="arrow" /></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="articles__contentBox card">
                        <div class="articles__contentImg">
                            <img src="{{ asset('frontend') }}/assets/images/Articles/demo-03.png " alt="artilce01" />
                        </div>
                        <div class="articles__contentText">
                            <h5 class="articles__title"><a href="#">We are Hiring</a></h5>
                            <p class="articles__brief">
                                Curabitur mollis elit eu libero eleifend, a aliquet magna
                                consectetur. Fusce at accumsan quam. Ut maximus facilisis
                                libero sit amet viverra. Nullam eu rutrum ex.
                            </p>
                            <a href="#" class="articles__readMore">Read More
                                <span><img src="{{ asset('frontend') }}/assets/images/icons/arrow.png" alt="arrow" /></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Article/Blog Section End -->
@endsection

@section('style') 

@endsection
