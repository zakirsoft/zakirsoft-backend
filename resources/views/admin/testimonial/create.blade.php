@extends('layouts.admin')

@section('title')
    Add Testimonial - ZakirSoft
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
                        <h5>Add Testimonial</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}">Testimonial</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add Testimonial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Testimonial</h5>
                                </div>
                                <div class="card-block">
                                    <form id="main" method="POST" action="{{ route('testimonial.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Purpose</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('purpose') is-invalid @enderror" name="purpose" id="name" placeholder="Enter Purpose of Testimonial (Not visible)">

                                            @error('purpose')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Content</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="content"
                                                placeholder="Write Testimonial content here.... " rows="5"></textarea>

                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Position</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('position') is-invalid @enderror name="position" id="position" placeholder="Enter position">

                                            @error('position')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row pt-4">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0"><i class="fas fa-plus"></i> Add Testimonial</button>
                                            </div>
                                        </div>
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
