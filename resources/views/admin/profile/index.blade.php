@extends('layouts.admin')

@section('title')
    Profile Overview - ZakirSoft
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
                                    <div class="text-center pb-5">
                                        <img id="image" width="130" height="130" style="border-radius: 100px" / src="{{ asset(Auth::user()->image) }}">
                                    </div>
                                    <form id="main"  method="" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-10">
                                              <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ Auth::user()->name }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">E-Mail Address</label>
                                            <div class="col-sm-10">
                                              <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
                                            </div>
                                        </div>
                                        <a type="button" href="{{route('login')}}" class="btn btn-secondary m-b-0 mt-5"><i class="fas fa-arrow-left"></i> Back</a>
                                    </form>
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
