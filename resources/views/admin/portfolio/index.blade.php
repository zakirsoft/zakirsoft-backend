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
                    <i class="feather icon-credit-card bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Portfolio</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                @if (session('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('danger') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
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
                                    <h5>Portfolio Table</h5>
                                       <a href="{{ route('portfolio.create') }}"> <button class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add Portfolio</button></a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category Name</th>
                                                    <th>Project Title</th>
                                                    <th>Client Name</th>
                                                    <th>Client Email</th>
                                                    <th>Image</th>
                                                    <th>Live Link</th>
                                                    <th>Project Length</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($portfolio_list as $key => $portfolio)
                                                <tr>
                                                    <th scope="row">{{ $portfolio_list->firstItem() + $key }}</th>
                                                    <td>{{ $portfolio->category->name }}</td>
                                                    <td>{{ $portfolio->title }}</td>
                                                    <td>{{ $portfolio->client_name }}</td>
                                                    <td>{{ $portfolio->client_email }}</td>
                                                    <td>
                                                        <img width="50px" height="50px" src="{{asset($portfolio->image) }}" alt="" srcset="">
                                                    </td>
                                                    <td>{{ $portfolio->live_link }}</td>
                                                    <td>{{ $portfolio->project_length }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-cog"></i> Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item text-info btn btn-sm" href="{{ route('portfolio.edit', $portfolio->id) }}"><i class="far fa-edit"></i> Edit</a>
                                                          <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm text-danger m-1 dropdown-item"></i><i class="far fa-trash-alt"></i> Remove</button>
                                                        </form>
                                                        </div>
                                                      </div>
                                                    </td>

                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="20" class="text-center text-danger">
                                                        <h5>No Data Found</h5>
                                                    </td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $portfolio_list->links()  }}
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
