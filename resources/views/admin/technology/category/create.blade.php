@extends('layouts.admin')

@section('title')
    Add Technology Category - ZakirSoft
@endsection

@section('technology')
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
                        <h5>Add Category</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('technology.category.index') }}">Category List</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add Category</a>
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
                                    <h5>Add Category</h5>
                                    <a href="{{ route('technology.category.index') }}"> <button class="btn btn-primary float-right"><i class="fas fa-arrow-left"></i> Back</button></a>
                                </div>
                                <div class="card-block">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <form  method="POST" action="{{ route('technology.category.store') }}">
                                                @csrf
                                                <div class="row justify-content-center">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Name</label>
                                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter name">
                                                            @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
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
