@extends('layouts.admin')

@section('title')
    Job Details - ZakirSoft
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
                        <h5>Job Details</h5>
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
                            <a href="javascript:void(0)">Job Details</a>
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
                                    <h5>Job Details</h5>
                                    <a href="{{ route('jobpost.index') }}"> <button class="btn btn-primary float-right">Back</button></a>
                                </div>
                                <div class="card-block">
                                    <table v-else class="table card-table table-bordered datatable">
                                        <tbody>
                                            <tr>
                                                <th width="20%">Title</th>
                                                <td width="80%">{{ $post->title }}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Type</th>
                                                <td width="80%">{{ $post->type }}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Salary</th>
                                                <td width="80%">{{ $post->salary }}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Apply Link</th>
                                                <td width="80%"><a href="{{ $post->link }}">{{ $post->link }}</a></td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Dead Line</th>
                                                <td width="80%">{{ Carbon\Carbon::parse($post->deadline)->format('d/m/Y') }}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Status</th>
                                                <td width="80%">
                                                    @if ($post->status)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Short Description</th>
                                                <td width="80%">{!! $post->short_description !!}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Long Description</th>
                                                <td width="80%">{!! $post->long_description !!}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Created At</th>
                                                <td width="80%">{{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</td>
                                            </tr>
                                            <tr>
                                                <th width="20%">Updated At</th>
                                                <td width="80%">{{ Carbon\Carbon::parse($post->updated_at)->format('d/m/Y') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
