@extends('layouts.admin')

@section('title')
    Dashboard - ZakirSoft
@endsection

@section('dashboard')
    active
@endsection

@section('content')

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="fas fa-tachometer-alt bg-c-green"></i>
                    <div class="d-inline">
                        <h5>Dashboard</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" id="responsive___none">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                        <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Users</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{$user}}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas far fa-user text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Roles</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{$role}}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-lock text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Portfolios</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{$portfolio}}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-window-restore text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Testimonials</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{$testimonial}}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-file-word text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Career</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{ $career }}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-graduation-cap text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Team Members</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{$social}}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Social Profile</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">{{$team}}</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-share-alt text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Example</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">0</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-desktop text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
