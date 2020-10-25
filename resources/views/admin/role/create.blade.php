@extends('layouts.admin')

@section('title')
Users View - ZakirSoft
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
                        <h5>Memebers</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Memebers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                @if (session('create'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('create') }} <a href="{{ route('role.index') }}" class="alert-link">Check Here</a>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="page-body">
                    <div class="row">
                        <div class="col-8 offset-2">

                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5>Create Role</h5>
                                    <a href="{{ route('role.index') }}" class="btn btn-sm btn-primary mr-1"
                                        title="Return Back"><i class="fas fa-arrow-alt-circle-left pr-1"></i>Back</a>
                                </div>
                                <div class="card-block col-md-6 offset-3 col-sm-12 pb-5">
                                    <form action="{{ route('role.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group pb-3">
                                            <label for="name">Role Name</label>
                                            <input type="text" name="role_name" class="form-control @error('role_name') is-invalid @enderror" id="name">

                                            @error('role_name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary"><i
                                                class="fas fa-plus-square pr-1"></i>Save</button>
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
