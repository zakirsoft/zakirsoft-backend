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
                    <div class="row border-bottom align-items-center mb-50">
                        <div class="col-md-6">
                            <div class="tab-text">
                                <p>These all our team member recent work</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="work_tab">
                                <ul class="nav nav-pills mr-auto" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link   active" id="pills-all-tab" data-toggle="pill" href="#pills-all"
                                            role="tab" aria-controls="pills-all" aria-selected="true">all</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-frontend-tab" data-toggle="pill"
                                            href="#pills-frontend" role="tab" aria-controls="pills-frontend"
                                            aria-selected="false">frontend</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-backend-tab" data-toggle="pill" href="#pills-backend"
                                            role="tab" aria-controls="pills-backend" aria-selected="false">backend</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-ui-tab" data-toggle="pill" href="#pills-ui" role="tab"
                                            aria-controls="pills-ui" aria-selected="false">UI/UX</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content will appear here -->
                    <div class="tab-content pt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">

                            @foreach ($portfolio as $item)
                            <div class="row align-items-center mb-100">
                                <div class="col-4">
                                    <div class="project_info">
                                        {{-- {{ $portfolio->title == 1  ? 'selected' : '' }} --}}
                                        <span class="p_type">a</span>
                                        <h3 class="project_name">Project Name</h3>
                                        <a href="#" class="v_project">
                                            view more
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-1.png" alt="Project_img">
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>


                        <div class="tab-pane fade" id="pills-frontend" role="tabpanel"
                            aria-labelledby="pills-frontend-tab">
                            <div class="row align-items-center mb-100">
                                <div class="col-4">
                                    <div class="project_info">
                                        <span class="p_type">Project Type</span>
                                        <h3 class="project_name">Project Name</h3>
                                        <a href="#" class="v_project">
                                            view more
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-1.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-2.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-3.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-4.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-5.png" alt="Project_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-backend" role="tabpanel"
                            aria-labelledby="pills-backend-tab">

                            <div class="row align-items-center mb-100">
                                <div class="col-4">
                                    <div class="project_info">
                                        <span class="p_type">Project Type</span>
                                        <h3 class="project_name">Project Name</h3>
                                        <a href="#" class="v_project">
                                            view more
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-1.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-2.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-3.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-4.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-5.png" alt="Project_img">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-ui" role="tabpanel" aria-labelledby="pills-ui-tab">

                            <div class="row align-items-center mb-100">
                                <div class="col-4">
                                    <div class="project_info">
                                        <span class="p_type">Project Type</span>
                                        <h3 class="project_name">Project Name</h3>
                                        <a href="#" class="v_project">
                                            view more
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-1.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-2.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-3.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-4.png" alt="Project_img">
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
                                            <img src="{{ asset('frontend') }}/assets/images/Arrow-icon.png" alt="arrow_icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="project_img">
                                        <img src="{{ asset('frontend') }}/assets/images/project-img/img-5.png" alt="Project_img">
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
