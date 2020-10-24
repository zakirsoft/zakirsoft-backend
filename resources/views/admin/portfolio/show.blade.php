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
                        <h5>Show Portfolio</h5>

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
                            <a href="javascript:void(0)">Show Portfolio</a>
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
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Show Portfolio</h5>
                                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary float-right"><i class="fa fa-arrow-left"></i> Portfolio</a>
                                </div>
                                <div class="card-block">
                                    <table id="datatable-responsive"
                                        class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <tbody>
                                            <tr>
                                                <th width="25%">Student Class</th>
                                                <td width="25%">One</td>
                                                <th width="25%">Student Roll</th>
                                                <td width="25%">123456</td>
                                            </tr>
                                            <tr style="font-size: 16px;">
                                                <th class="text-info" width="25%">Bangla</th>
                                                <td width="25%">
                                                    <span class="text-success font-weight-bold">79</span> Out Of 100
                                                </td>
                                                <th class="text-info" width="25%">English</th>
                                                <td width="25%">
                                                    <span class="text-danger font-weight-bold"> 32</span> Out Of 100
                                                </td>
                                            </tr>
                                            <tr style="font-size: 16px;">
                                                <th class="text-info" width="25%">Math</th>
                                                <td width="25%">
                                                    <span class="text-success font-weight-bold">88</span> Out Of 100
                                                </td>
                                                <th class="text-info" width="25%">Religion</th>
                                                <td width="25%">
                                                    <span class="text-success font-weight-bold">50</span> Out Of 100

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- <form id="main">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Category Name Type</label>

                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input value="{{ $portfolio->title }}" type="text" class="form-control" name="title" id="name"placeholder="Enter Title of Portfolio">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Project Length </label>
                                                    <input value="{{ $portfolio->project_length }}" type="text" class="form-control" name="project_length" id="name" placeholder="Enter Project Length of Portfolio">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mb-3 mt-3">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Current Thumbnail Image</label><br>
                                                  <img height="80px" width="150px" src="{{ asset($portfolio->image) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Multiple Image</label>


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
                                                    <input type="text" class="form-control" name="client_email" id="name" placeholder="Enter Client Email of Portfolio" value="{{ $portfolio->client_email }}">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Live Link </label>
                                                    <input type="text" class="form-control" name="live_link" id="name" value="{{ $portfolio->live_link }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bahance Link</label>
                                                    <input type="text" class="form-control" name="bahance_link" id="name" value="{{ $portfolio->bahance_link }}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Our Role</label>
                                                    <textarea style="height: 130px" type="text" class="form-control" name="our_role" placeholder="Enter role of portfolio"> {{ $portfolio->our_role }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Tools Used </label>
                                                    <textarea type="text" class="form-control" name="tool_used" placeholder="Write Tool User of Portfolio.... "> {{ $portfolio->tool_used }} </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea type="text" class="form-control" name="description" placeholder="Write Portfolio content here.... "> {{ $portfolio->description }} </textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sync"></i> Update Portfolio</button>
                                        </div>
                                    </form> --}}
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
