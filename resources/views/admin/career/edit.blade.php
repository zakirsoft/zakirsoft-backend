@extends('layouts.admin')

@section('title')
    Portfolio - ZakirSoft
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
                        <h5>Edit Career</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('career.index') }}">Career</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Edit Career</a>
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
                    <div class="row">
                        <div class="col-sm-6">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="card">
                                <div class="card-header bg-dark text-light">
                                   Edit Career Content
                                </div>
                                <div class="card-block">
                                    <form id="main" method="POST" action="{{ route('career.update', $career->id) }}"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input value="{{ $career->title }}" required name="title" type="text" class="form-control" id="title" placeholder="Enter Title of Career">
                                          </div>
                                          <div class="form-group">
                                            <label for="content">Content</label>
                                            <input value="{{ $career->content }}" required name="content" type="text" class="form-control" id="content" placeholder="Enter Content of Career">
                                          </div>


                                        <button type="submit" class="btn btn-primary m-b-0"><i class="fas fa-sync"></i> Update Career</button>
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




