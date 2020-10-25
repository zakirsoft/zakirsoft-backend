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
                                                <th width="25%" class="font-weight-bold">Category Name</th>
                                                <td width="25%">{{ $portfolio->category->name }}</td>
                                                <th width="25%">Title</th>
                                                <td width="25%">{{ $portfolio->title }}</td>
                                            </tr>
                                            <tr>
                                                <th width="25%" class="font-weight-bold">Client Name</th>
                                                <td width="25%">{{ $portfolio->client_name }}</td>
                                                <th width="25%">Client Email</th>
                                                <td width="25%">{{ $portfolio->client_email }}</td>
                                            </tr>
                                            <tr>
                                                <th width="25%" class="font-weight-bold">Live Link</th>
                                                <td width="25%">{{ $portfolio->live_link }}</td>
                                                <th width="25%">Bahance Link</th>
                                                <td width="25%">{{ $portfolio->bahance_link }}</td>
                                            </tr>
                                            <tr>
                                                <th width="25%" class="font-weight-bold">Our Role</th>
                                                <td width="25%">{{ $portfolio->our_role }}</td>
                                                <th width="25%">Tools Used</th>
                                                <td width="25%">{{ $portfolio->tool_used }}</td>
                                            </tr>
                                            <tr>
                                                <th width="25%" class="font-weight-bold">Description</th>
                                                <td width="25%">{{ $portfolio->description }}</td>
                                                <th width="25%">Project Length</th>
                                                <td width="25%">{{ $portfolio->project_length }}</td>
                                            </tr>
                                            <tr>
                                                <th width="25%" class="font-weight-bold">Thumbnail Image</th>
                                                <td width="25%"><img height="200px" width="350px" src="{{ asset($portfolio->image) }}" alt=""></td>
                                                <th width="25%">Multiple Images</th>
                                                <td width="25%">
                                                    @if ($m_portfolio_image->count() == 0)
                                                        <span class="text-danger">Not found</span>
                                                    @else
                                                        @foreach ($m_portfolio_image as $item)
                                                            <img height="80px" width="150px" src="{{ asset($item->m_image) }}" alt="">
                                                        @endforeach
                                                    @endif
                                                </td>
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
