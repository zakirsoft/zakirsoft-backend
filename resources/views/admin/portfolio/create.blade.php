@extends('layouts.admin')

@section('title')
    Portfolio - ZakirSoft
@endsection

@section('portfolio')
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
                        <h5>Add Portfolio</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add Portfolio</a>
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
                    {{ session('success') }} <a href="{{ route('portfolio.index') }}"> Click here to go to table</a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
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
                                    <h5>Add Portfolio</h5>
                                </div>
                                <div class="card-block">

                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                           Please provide field required conditions!
                                        </div>
                                        @endif

                                    <form id="main" method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title of Portfolio">
                                                    @error('title') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="col-4">
                                                <div class="form-group">
                                                    <label>Work Type</label>
                                                    <select name="work_type" class="form-control @error('work_type') is-invalid @enderror">
                                                        <option value="">Select Work Type</option>
                                                        <option value="1">Design</option>
                                                        <option value="2">Development</option>
                                                        <option value="3">UI/UX</option>
                                                    </select>
                                                    @error('work_type') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div> --}}
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Project Length</label>
                                                    <input value="{{ old('project_length') }}" type="text" class="form-control  @error('project_length') is-invalid @enderror" name="project_length" placeholder="Enter Project Length of Portfolio">
                                                    @error('project_length') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Thumbnail Image</label>
                                                    <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                                                    @error('image') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Multiple Image</label>
                                                    <input multiple type="file" class="form-control" name="multiple_image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Name</label>
                                                    <input value="{{ old('client_name') }}" type="text" class="form-control  @error('client_name') is-invalid @enderror" name="client_name" placeholder="Enter Client Name of Portfolio">
                                                    @error('client_name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Email</label>
                                                     <input value="{{ old('client_email') }}" type="text" class="form-control @error('client_email') is-invalid @enderror" name="client_email" placeholder="Enter Client Email of Portfolio">
                                                     @error('client_email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Live Link ( <span style="font-size: 11px;" class="text-danger">https://example.com</span> )</label>
                                                   <input value="{{ old('live_link') }}" type="text" class="form-control @error('live_link') is-invalid @enderror" name="live_link" >
                                                   @error('live_link') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bahance Link ( <span style="font-size: 11px;" class="text-danger">https://example.com</span> ) </label><br>
                                                     <input value="{{ old('bahance_link') }}" type="text" class="form-control  @error('bahance_link') is-invalid @enderror" name="bahance_link">
                                                     @error('bahance_link') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Our Role</label>
                                                    <textarea id="editor5" type="text" class="form-control @error('our_role') is-invalid @enderror" name="our_role" placeholder="Enter Role of Portfolio">{{ old('our_role') }}</textarea>
                                                    @error('our_role') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Tools Used </label>
                                                    <textarea id="editor2" type="text" class="form-control @error('tool_used') is-invalid @enderror" name="tool_used" placeholder="Write Tool User of Portfolio.... ">{{ old('tool_used') }}</textarea>
                                                    @error('tool_used') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea  id="editor" type="text" class="form-control @error('description') is-invalid @enderror"  name="description" placeholder="Write Portfolio content here.... ">{{ old('description') }}</textarea>
                                            @error('description') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary  m-b-0"><i class="fas fa-plus"></i> Add Portfolio</button>



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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<style>
    .ck-editor__editable_inline {
        min-height: 170px;
    }
</style>
@endsection
@section('script')
{{-- Dropzone  --}}
<script src="{{ asset('admin') }}/js/dropzone-amd-module.min.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor5' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endsection
