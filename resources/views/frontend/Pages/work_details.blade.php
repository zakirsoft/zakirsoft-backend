@extends('frontend.master')

@section('work') active @endsection
@section('work_footer') footer_active @endsection

@section('content')

    <!-- details slider section start -->
    <section id="details_slier">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="details-slider-active">

                        @foreach ($work_details_imgages as $item)
                        <div class="single-slider">
                            {{-- <p>{{  $item->portfolio_images->id }}</p> --}}
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
                            <p>Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem
                                dolor id sem. Maecenas a venenatis enim, quis porttitor magna. Etiam nec rhoncus neque.
                                Sed quis ultrices eros. Curabitur sit amet eros eu arcu consectetur pulvinar. Aliquam
                                sodales, turpis eget tristique tempor, sapien lacus facilisis diam, molestie efficitur
                                sapien velit nec magna. Maecenas interdum efficitur tempor. Quisque scelerisque id odio
                                nec dictum. Donec sed pulvinar tortor.
                                <br> <br>
                                mattis est. Nullam mattis mauris quis massa consectetur dapibus. Nam ac
                                iaculis magna. Sed eget diam mi. Sed id quam et purus luctus pretium.</p>
                        </div>
                        <div class="project_button">
                            <a class="button" href="#">View Project on live</a>
                            <a href="#">View Project on live <img src="assets/images/Arrow-icon.png" alt="arrow_icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-100">
                <div class=" col-md-6 col-xl-3 offset-xl-3 col-lg-3 offset-lg-3">
                    <div class="our_role">
                        <ul>
                            <h4>Our Role</h4>
                            <li>User interface Design</li>
                            <li>Back end</li>
                            <li>Front end</li>
                        </ul>
                    </div>
                    <div class="our_role">
                        <ul>
                            <h4>Tools Used</h4>
                            <li>note js</li>
                            <li>Vusial code studio</li>
                            <li>Adobe Photoshop</li>
                            <li>Blender</li>
                        </ul>
                    </div>
                    <div class="our_role">
                        <ul>
                            <h4>project length</h4>
                            <li>11 Month</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_role_img">
                        <img src="assets/images/ww.jpg" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details project section end -->

    <!-- project-name area section end -->
    <section id="details_project">
        <div class="container">

            @foreach ($portfolio as $item)
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                aria-labelledby="pills-all-tab">
                <div class="row align-items-center mb-100">
                    <div class="col-4">
                        <div class="project_info">
                            <span class="p_type">{{ $item->category->name }}</span>
                            <h3 class="project_name">{{ $item->title }}</h3>
                            <a href="{{ route('work_details_website', $item->id) }}" class="v_project">
                                view more
                                <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="project_img">
                            <img src="{{ asset($item->image) }}" alt="Project_img">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </section>
    <!-- project-name area section end -->
@endsection
