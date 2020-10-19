@extends('layouts.admin')

@section('title')
    User Update - ZakirSoft
@endsection

@section('users')
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
                    <i class="feather icon-credit-card bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>User Management</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Management</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Update</a>
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
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5>User Update</h5>
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary mr-1"
                                        title="Return Back"><i class="fas fa-arrow-alt-circle-left pr-1"></i>Back</a>
                                </div>
                                <div class="card-block col-md-6 offset-3 col-sm-12 pb-5">

                                    <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="text-center">
                                            <img id="image" width="130" height="130" style="border-radius: 100px" / src="{{ asset($user->image) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name ?? old('name') }}" autocomplete="name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email">E-Mail</label>
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}" autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" autocomplete="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">

                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group pb">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square pr-1"></i>Update</button>
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
