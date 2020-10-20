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
                        <h5>Edit Portfolio</h5>

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
                            <a href="javascript:void(0)">Edit Portfolio</a>
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
                    {{ session('insert') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('insert') }}
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
                                    <h5>Edit Portfolio</h5>
                                </div>
                                <div class="card-block">
                                    <form id="main" method="POST" action="{{ route('portfolio.update', $portfolio->id) }}"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-6 offset-3">
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input value="{{ $portfolio->title }}" type="text" class="form-control" name="title" id="name"
                                                        placeholder="Enter Title of Portfolio">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Project Length </label>
                                                    <input value="{{ $portfolio->project_length }}" type="text" class="form-control"
                                                        name="project_length" id="name" placeholder="Enter Project Length of Portfolio">
                                                    </>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mb-3 mt-3">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Current Thumbnail Image</label><br>
                                                  <img height="80px" width="80px" src="{{ asset($portfolio->image) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Thumbnail Image</label>
                                                    <input type="file" class="form-control" name="image" id="position">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Multiple Image</label>
                                                    <input multiple type="file" class="form-control" name="multiple_image" id="position">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Name</label>
                                                    <input type="text" class="form-control" name="client_name" id="name" value="{{ $portfolio->client_name }}" placeholder="Enter Client Name of Portfolio">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Email</label>
                                                    <input type="text" class="form-control" name="client_email" id="name"
                                                        placeholder="Enter Client Email of Portfolio" value="https://{{ $portfolio->client_email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Live Link </label>
                                                    <input type="text" class="form-control" name="live_link" id="name" value="https://{{ $portfolio->live_link }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bahance Link</label>
                                                    <input type="text" class="form-control" name="bahance_link" id="name"
                                                        value="{{ $portfolio->bahance_link }}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Our Role</label>
                                                    <textarea style="height: 130px" id="editor4" type="text" class="form-control" name="our_role" placeholder="Enter role of portfolio"> {{ $portfolio->our_role }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Tools Used </label>
                                                    <textarea id="editor2" type="text" class="form-control" name="tool_used" placeholder="Write Tool User of Portfolio.... "> {{ $portfolio->tool_used }} </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea id="editor3" type="text" class="form-control" name="description"
                                                placeholder="Write Portfolio content here.... "> {{ $portfolio->description }} </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary m-b-0"><i class="fas fa-sync"></i> Update Portfolio</button>
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
        min-height: 170px;
    }
</style>
@endsection

@section('script')
<script>
    ClassicEditor.create( document.querySelector( '#editor2' )).catch( error => {
        console.error( error );
    });
    ClassicEditor.create( document.querySelector( '#editor3' )).catch( error => {
        console.error( error );
    });
    ClassicEditor.create( document.querySelector( '#editor4' )).catch( error => {
        console.error( error );
    });
</script>
@endsection
