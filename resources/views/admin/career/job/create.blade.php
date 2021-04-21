@extends('layouts.admin')

@section('title')
    Add Job Post - ZakirSoft
@endsection

@section('career')
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
                        <h5>Add Job Post</h5>
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
                            <a href="javascript:void(0)">Add Job Post</a>
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
                                    <h5>Add Job Post</h5>
                                    <a href="{{ route('jobpost.index') }}"> <button class="btn btn-primary float-right">Back</button></a>
                                </div>
                                <div class="card-block">
                                    <form method="POST" action="{{ route('jobpost.store') }}">
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
                                                    <label class="col-form-label">Job Type</label>
                                                    <select name="type" class="form-control @error('type') is-invalid @enderror">
                                                        <option value="Full Type">Full Type</option>
                                                        <option value="Half Type">Half Type</option>
                                                        <option value="Freelance">Freelance</option>
                                                    </select>
                                                    @error('type') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="salary" class="col-form-label">Salery Range</label>
                                                    <input type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" id="salary" placeholder="Enter salary" value="{{ old('salary') }}">
                                                    @error('salary') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="deadline" class="col-form-label">Dead Line</label>
                                                    <input type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" id="deadline" value="{{ old('deadline') }}">
                                                     @error('deadline') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="link" class="col-form-label">Apply Link</label>
                                                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="link" placeholder="Enter link" value="{{ old('link') }}">
                                                     @error('link') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="col-form-label">Short Description</label>
                                                    <textarea id="editor1" type="text" class="form-control" name="short_description" rows="5">{{ old('short_description') }}</textarea>
                                                     @error('short_description') <span class="invalid-feedback d-block" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="col-form-label">Long Description</label>
                                                    <textarea id="editor2" type="text" class="form-control" name="long_description" rows="5">{{ old('long_description') }}</textarea>
                                                     @error('long_description') <span class="invalid-feedback d-block" role="alert">{{ $message }}</span> @enderror
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
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
        });
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
        });
    </script>
@endsection
