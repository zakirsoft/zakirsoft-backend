@extends('layouts.admin')

@section('title')
    Profile Overview - ZakirSoft
@endsection

@section('testimonial')
active pcoded-trigger
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
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Profile Overview</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}">Profile</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Overview</a>
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
                    <div class="row justify-content-center">
                        <div class="col-sm-8">

                            <div class="card">
                                <div class="card-header">
                                    <h5>User's Profile</h5>
                                </div>
                                <div class="card-block">

                                    <button type="submit" class="btn btn-secondary m-b-0"><i class="fas fa-arrow-left"></i> Back</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
