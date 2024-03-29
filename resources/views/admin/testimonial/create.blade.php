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
                <div class="page-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Testimonial</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <form id="main"  method="POST" action="{{ route('testimonial.store') }}">
                                                @csrf
                                                <div class="row justify-content-center">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Name</label>
                                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name">
                                                             @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Position</label>
                                                            <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" id="position" placeholder="Enter position">
                                                             @error('position') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Content</label>
                                                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="Write testimonial content here.... " rows="5"></textarea>
                                                             @error('content') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary  m-b-0"><i class="fas fa-plus"></i> Add</button>
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
    </div>
</div>
@endsection
