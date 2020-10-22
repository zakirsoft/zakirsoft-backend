@extends('frontend.master')

@section('work') active @endsection
@section('work_footer') footer_active @endsection

@section('content')


    <!-- work section start -->
    <section id="work" class="none">
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
                                            <a class="nav-link   active" id="pills-all-tab" data-toggle="pill"
                                                href="#pills-all" role="tab" aria-controls="pills-all"
                                                aria-selected="true">all</a>
                                        </li>

                                        @foreach ($category_list as $item)
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-frontend-tab" data-toggle="pill"
                                            href="#pills-frontend" role="tab" aria-controls="pills-frontend"
                                            aria-selected="false">{{ $item->name }}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content will appear here -->
                    <div class="tab-content pt-5" id="pills-tabContent">

                        @foreach ($portfolio as $item)
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">
                            <div class="row align-items-center mb-100">
                                <div class="col-4">
                                    <div class="project_info">
                                        <span class="p_type">{{ $item->category->name }}</span>
                                        <h3 class="project_name">{{ $item->title }}</h3>
                                        <a href="#" class="v_project">
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

                        <div class="tab-pane fade" id="pills-frontend" role="tabpanel"
                        aria-labelledby="pills-frontend-tab">
                        <div class="row align-items-center mb-100">
                            <div class="col-4">
                                <div class="project_info">
                                    <span class="p_type">Project Type</span>
                                    <h3 class="project_name">Project Name</h3>
                                    <a href="#" class="v_project">
                                        view more
                                        <img src="assets/images/Arrow-icon.png" alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="project_img">
                                    <img src="assets/images/project-img/img-1.png" alt="Project_img">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-100">
                            <div class="col-4">
                                <div class="project_info">
                                    <span class="p_type">Project Type</span>
                                    <h3 class="project_name">Project Name</h3>
                                    <a href="#" class="v_project">
                                        view more
                                        <img src="assets/images/Arrow-icon.png" alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="project_img">
                                    <img src="assets/images/project-img/img-2.png" alt="Project_img">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-100">
                            <div class="col-4">
                                <div class="project_info">
                                    <span class="p_type">Project Type</span>
                                    <h3 class="project_name">Project Name</h3>
                                    <a href="#" class="v_project">
                                        view more
                                        <img src="assets/images/Arrow-icon.png" alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="project_img">
                                    <img src="assets/images/project-img/img-3.png" alt="Project_img">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-100">
                            <div class="col-4">
                                <div class="project_info">
                                    <span class="p_type">Project Type</span>
                                    <h3 class="project_name">Project Name</h3>
                                    <a href="#" class="v_project">
                                        view more
                                        <img src="assets/images/Arrow-icon.png" alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="project_img">
                                    <img src="assets/images/project-img/img-4.png" alt="Project_img">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="project_info">
                                    <span class="p_type">Project Type</span>
                                    <h3 class="project_name">Project Name</h3>
                                    <a href="#" class="v_project">
                                        view more
                                        <img src="assets/images/Arrow-icon.png" alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="project_img">
                                    <img src="assets/images/project-img/img-5.png" alt="Project_img">
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- work section end -->
@endsection

