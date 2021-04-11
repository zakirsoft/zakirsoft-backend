@extends('layouts.admin')

@section('title')
    Add Service - ZakirSoft
@endsection

@section('service')
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
                        <h5>Add Service</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Service</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add Service</a>
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
                                    <h5>Add Service</h5>
                                </div>
                                <div class="card-block">
                                    <form  method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-form-label">Title</label>
                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter title">
                                                     @error('title') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Write description here.... " rows="5"></textarea>
                                                    @error('description') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-form-label">Image</label>
                                                    <input type="file" class="border-0 form-control @error('image') is-invalid @enderror" name="image">
                                                     @error('image') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
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
@endsection
