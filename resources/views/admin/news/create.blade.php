@extends('layouts.admin')

@section('title')
    Add News - ZakirSoft
@endsection

@section('news')
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
                        <h5>Add News</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('services.index') }}">News</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add News</a>
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
                                    <h5>Add News</h5>
                                    <a href="{{ route('news.index') }}"> <button class="btn btn-primary float-right"><i class="fas fa-arrow-left"></i> Back</button></a>
                                </div>
                                <div class="card-block">
                                        <div class="row justify-content-center">
                                          <div class="col-8">
                                            <form  method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row justify-content-center">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Title</label>
                                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter title" value="{{ old('title') }}">
                                                            @error('title') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Image</label>
                                                            <input type="file" class="p-0 border-0 form-control @error('image') is-invalid @enderror" name="image">
                                                            @error('image') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Short Description</label>
                                                            <textarea type="text" class="form-control @error('short_description') is-invalid @enderror" name="short_description" rows="5">{{ old('short_description') }}</textarea>
                                                            @error('short_description') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Description</label>
                                                            <textarea id="editor2" type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="5">{{ old('description') }}</textarea>
                                                            @error('description') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
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
