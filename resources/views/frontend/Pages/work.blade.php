@extends('frontend.master')

@section('work') active @endsection
@section('work_footer') active @endsection

@section('content')
    <!-- work section start -->
    <section id="work" class="none">
        <div class="round_shape_img">
            <img src="{{ asset('frontend') }}/assets/images/shape/shadow_4.png" alt="shaddow_ibackground">
        </div>
        <div class="container">
            <div class="row section_title">
                <h2>Work</h2>
            </div>
            <div class="work_content">
                <div class="container">
                    <div class="border-bottom pb-5">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="tab-text">
                                    <p>These all our team member recent work</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work_tab">
                                    <ul class="nav nav-pills mr-auto" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link show active" id="pills-all-tab" data-toggle="pill"
                                                href="#pills-all" role="tab" aria-controls="pills-all"
                                                aria-selected="true">all</a>
                                        </li>
                                        @foreach ($category_list as $category)
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-frontend-tab" data-toggle="pill"
                                            href="#pills{{ $category->id }}" role="tab" aria-controls="pills-frontend"
                                            aria-selected="false">{{ $category->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab content will appear here -->
                    <div class="tab-content pt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        @foreach ($portfolio as $portfolio_item)
                        <div class="row align-items-center portfolio_img">
                            <div class="col-lg-4 col-12 order-lg-0 order-2">
                                <div class="project_info">
                                    <span class="p_type">{{ $portfolio_item->category->name }}</span>
                                    <h3 class="project_name">{{ $portfolio_item->title }}</h3>
                                    <a href="{{ route('work_details_website', $portfolio_item->id) }}" class="v_project">
                                        view more
                                        <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 order-lg-0 order-1">
                                <div class="project_img">
                                    <img src="{{ asset($portfolio_item->image) }}" alt="Project_img">
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                        @foreach ($category_list as $category)
                            @php
                                $work_item = App\Models\Portfolio::where('category_id', $category->id)->latest()->get();
                            @endphp

                                <div class="tab-pane fade " id="pills{{ $category->id }}" role="tabpanel"
                                    aria-labelledby="pills-frontend">
                                    @foreach ($work_item as $item)
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
                                    @endforeach
                                </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- work section end -->
@endsection
