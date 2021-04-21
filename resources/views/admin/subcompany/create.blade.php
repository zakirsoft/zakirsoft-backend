@extends('layouts.admin')

@section('title')
    Add Subcompany - ZakirSoft
@endsection

@section('subcompany')
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
                        <h5>Add Subcompany</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('subcompany.index') }}">Subcompany List</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add Subcompany</a>
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
                        <div class="col-sm-10">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Subcompany</h5>
                                    <a href="{{ route('subcompany.index') }}"> <button class="btn btn-primary float-right">Back</button></a>
                                </div>
                                <div class="card-block">
                                    <form method="POST" action="{{ route('subcompany.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="title" class="col-form-label">Title</label>
                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter title" value="{{ old('title') }}">
                                                     @error('title') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="link" class="col-form-label">Link</label>
                                                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="link" placeholder="Enter Live Link" value="{{ old('link') }}">
                                                    @error('link') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Logo Image</label>
                                                    <input type="file" class="form-control pl-0 border-0 @error('logo') is-invalid @enderror" name="logo">
                                                     @error('logo') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Banner Image</label>
                                                    <input type="file" class="form-control pl-0 border-0 @error('banner') is-invalid @enderror" name="banner">
                                                    @error('banner') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <div class="form-group mb-1">
                                                    <label for="stats1_text" class="col-form-label"> Stat 1 Title </label>
                                                    <input type="text" class="form-control @error('stats1_text') is-invalid @enderror" name="stats1_text" id="stats1_text" placeholder="Stat title" value="{{ old('stats1_text') }}">
                                                    @error('stats1_text') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="stats1_value" class="col-form-label"> Stat 1 Value </label>
                                                    <input type="text" class="form-control @error('stats1_value') is-invalid @enderror" name="stats1_value" id="stats1_value" placeholder="Stat value" value="{{ old('stats1_value') }}">
                                                    @error('stats1_value') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-1">
                                                    <label for="stats2_text" class="col-form-label"> Stat 2 Title </label>
                                                    <input type="text" class="form-control @error('stats2_text') is-invalid @enderror" name="stats2_text" id="stats2_text" placeholder="Stat title" value="{{ old('stats2_text') }}">
                                                    @error('stats2_text') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="stats2_value" class="col-form-label"> Stat 2 Value </label>
                                                    <input type="text" class="form-control @error('stats2_value') is-invalid @enderror" name="stats2_value" id="stats2_value" placeholder="Stat value" value="{{ old('stats2_value') }}">
                                                    @error('stats2_value') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="col-form-label">Description</label>
                                                    <textarea id="editor2" type="text" class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
                                                     @error('description') <span class="invalid-feedback d-block" role="alert">{{ $message }}</span> @enderror
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



@section('style')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection

@section('script')
    <script src="{{ asset('admin') }}/js/ckeditor.js"></script>
    <script>
        //Initialize Select2 Elements
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
        });
    </script>
@endsection
