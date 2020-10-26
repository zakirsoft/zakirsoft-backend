@extends('frontend.master')

@section('work') active @endsection
@section('work_footer') active @endsection

@section('content')
    <!-- details slider section start -->
    <section id="details_slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="details-slider-active">
                        @foreach ($work_details_imgages as $item)
                        <div class="single-slider">
                            <img src="{{ asset($item->m_image) }}" alt="project-img">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-12">
                    <div class="section_title project_title">
                        <h2>{{ $work_details_content->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details section end -->

    <!-- details project section start -->
    <section id="project_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-9 col-lg-9 offset-lg-3 offset-xl-3">
                    <div class="project_title_2">
                        <h2>About projects</h2>
                    </div>
                    <div class="project_wrapper">
                        <div class="project_text">
                            <p>{!! $work_details_content->description !!}</p>
                        </div>
                        <div class="project_button">
                            <a class="button" href="#">View Project on live</a>
                            <a target="_blank" href="{{ $work_details_content->live_link }}">View Project on live <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-100">
                <div class=" col-md-6 col-xl-3 offset-xl-3 col-lg-3 offset-lg-3">
                    <div class="our_role">
                        <ul>
                            <h4>Our Role</h4>
                            {!! $work_details_content->our_role !!}
                        </ul>
                    </div>
                    <div class="our_role">
                        <ul>
                            <h4>Tools Used</h4>
                            {!! $work_details_content->tool_used !!}
                        </ul>
                    </div>
                    <div class="our_role">
                        <ul>
                            <h4>project length</h4>
                            <li>{{ $work_details_content->project_length }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_role_img">
                        <img src="{{ asset($work_details_content->image) }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details project section end -->

    <section id="details_project">
        <div class="container">
            @foreach ($portfolio as $item)
            <div class="row align-items-center project_items mb-100">
                <div class="col-lg-4 col-12 order-2">
                    <div class="project_info">
                        <p>Next Projects</p>
                        <span class="p_type">{{ $item->category->name }}</span>
                        <h3 class="project_name">{{ $item->title }}</h3>
                        <a href="{{ route('work_details_website', $item->id) }}" class="v_project">
                            view more
                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-1">
                    <div class="project_img">
                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="Project_img">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
