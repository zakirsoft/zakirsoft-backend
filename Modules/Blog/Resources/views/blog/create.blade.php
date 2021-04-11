@extends('layouts.admin')
@section('title') Create Post | Admin @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="line-height: 36px;">Create Post</h3>
                    <a href="{{ route('module.post.index') }}" class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i class="fas fa-arrow-left"></i>&nbsp;Back</a>
                </div>
                <div class="row pt-3 pb-4">
                    <div class="col-md-6 offset-md-3">
                        <form class="form-horizontal" action="{{ route('module.post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Categoty</label>
                                <div class="col-sm-9">
                                    <select name="category_id" class="select2bs4 @error('category_id') is-invalid @enderror" style="width: 100%;">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('title') }}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Blog Title">
                                    @error('title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('image') }}" name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                                    @error('image') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="editor2" type="text" class="form-control" name="description" placeholder="Write description of post... ">{{ old('description') }}</textarea>
                                    @error('description') <span class="text-danger" style="font-size: 13px;"><strong>{{ $message }}</strong></span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tag</label>
                                <div class="col-sm-9">
                                    <select name="tags[]" class="select2bs4 @error('tags') is-invalid @enderror" style="width: 100%;" multiple data-placeholder="Select Tag">
                                        @foreach ($tags as $tag)
                                            <option {{ (collect(old('tags'))->contains($tag->id)) ? 'selected':'' }}  value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-4">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;Create Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<style>
.ck-editor__editable_inline {
    min-height: 170px;
}

.select2-results__option[aria-selected=true] {
    display: none;
}
.select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
    color: #fff;
    border: 1px solid #fff;
    background: #007bff;
    border-radius: 30px;
}
.select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff;
}
</style>
@endsection

@section('script')
<script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ asset('backend') }}/dist/js/ckeditor.js"></script>
<script>
    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    ClassicEditor
    .create(document.querySelector('#editor2'))
    .catch(error => { console.error(error); });
</script>
@endsection
