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
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                @if (session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
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
                                    <h5>Default Portfolio</h5>
                                    <span>Example of default table, Add <code>.table-de</code> class to the
                                        <code>.table</code> to create a table with default spacing. Default table all
                                        rows have <code>0.75rem</code> height.</span>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Project Title</th>
                                                    <th>Client Name</th>
                                                    <th>Client Email</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Live Link</th>
                                                    <th>Bahance Link</th>
                                                    <th>Project Length</th>
                                                    <th>Our Role</th>
                                                    <th>Tool Used</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($portfolio_list as $key => $portfolio)
                                                <tr>
                                                    <th scope="row">{{ $portfolio_list->firstItem() + $key }}</th>
                                                    <td>{{ $portfolio->title }}</td>
                                                    <td>{{ $portfolio->client_name }}</td>
                                                    <td>{{ $portfolio->client_email }}</td>
                                                    <td style="max-width: 300px">{{ $portfolio->description }}</td>
                                                    <td><img width="50px" height="50px" src="{{asset('uploads/portfolioimages') }}/{{ $portfolio->image }}" alt="" srcset=""></td>
                                                    <td>{{ $portfolio->live_link }}</td>
                                                    <td>{{ $portfolio->bahance_link }}</td>
                                                    <td>{{ $portfolio->project_length }}</td>
                                                    <td>{{ $portfolio->our_role }}</td>
                                                    <td>{{ $portfolio->tool_used }}</td>
                                                    <td>
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
                                                    <td colspan="20" class="text-center text-danger"><h2>No Data Found</h2></td>
                                                </tr>
                                                @endforelse
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
</div>


@endsection
