@extends('layouts.admin')

@section('title')
Customize Profile - ZakirSoft
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
                        <h5>Customize Profile</h5>
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
                            <a href="javascript:void(0)">Customize</a>
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
                                    <h5>Current Details</h5>
                                </div>
                                <div class="card-block">

                                    <div class="text-center pb-5">
                                        <img id="image" width="130" height="130" style="border-radius: 100px" / src="">
                                    </div>

                                    <form id="main"  method="" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                              <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name" value="">
                                              @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">E-Mail Address</label>
                                            <div class="col-sm-10">
                                              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="" disabled>
                                              @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10">
                                              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                              @error('image') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                                            <div class="col-sm-10">
                                              <input type="current_password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" placeholder="Current Password">
                                              @error('current_password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-5">
                                              <input type="new_password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" placeholder="New Password">
                                              @error('new_password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-sm-5">
                                                <input type="confirm_password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="Confirm Password">
                                                @error('confirm_password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                              </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary m-b-0 mt-4"><i class="fas fa-sync"></i> Update</button>
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
