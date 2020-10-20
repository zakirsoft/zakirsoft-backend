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
                        <li class="breadcrumb-item"><a href="#!">Portfolio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Add Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                @if (session('insert'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('insert') }} <a href="{{ route('portfolio.index') }}"> Click here to go to table</a>
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
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                    <form id="main" method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input value="{{ old('title') }}" type="text" class="form-control" name="title" id="name"
                                                    placeholder="Enter Title of Portfolio">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Project Length</label>
                                                    <input value="{{ old('project_length') }}" type="text" class="form-control" name="project_length" id="name"
                                                    placeholder="Enter Project Length of Portfolio">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Thumbnail Image</label>
                                                    <input type="file" class="form-control" name="image" id="position">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Multiple Image</label>
                                                    <input multiple type="file" class="form-control" name="multiple_image" id="position">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <form action="/file-upload" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form> --}}

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Name</label>
                                                    <input value="{{ old('client_name') }}" type="text" class="form-control" name="client_name" id="name"
                                                placeholder="Enter Client Name of Portfolio">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Email</label>
                                                     <input value="{{ old('client_email') }}" type="text" class="form-control" name="client_email" id="name"
                                                placeholder="Enter Client Email of Portfolio">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Live Link </label>
                                                   <input value="{{ old('live_link') }}" type="text" class="form-control" name="live_link" id="name"
                                                value="https://">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bahance Link</label>
                                                     <input value="{{ old('bahance_link') }}" type="text" class="form-control" name="bahance_link" id="name"
                                                value="https://">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Our Role</label>
                                                    <textarea id="editor5" type="text" class="form-control" name="our_role"
                                                    placeholder="Enter Role of Portfolio"
                                                    >{{ old('our_role') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Tools Used </label>
                                                    <textarea id="editor2" type="text" class="form-control" name="tool_used"
                                                    placeholder="Write Tool User of Portfolio.... "
                                                    >{{ old('tool_used') }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea  id="editor" type="text" class="form-control"  name="description"
                                            placeholder="Write Portfolio content here.... "
                                            >{{ old('description') }}</textarea>
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
