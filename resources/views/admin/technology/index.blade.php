@extends('layouts.admin')

@section('title')
    Technology - ZakirSoft
@endsection

@section('technology')
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
                        <h5>Technology</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Technology List</a>
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
                                    <h5>Technology List</h5>
                                    <a href="{{ route('technology.create') }}"> <button class="btn btn-primary float-right"><i class="fas fa-plus"></i></button></a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($technologies as $key => $technology)
                                                    <tr>
                                                        <td>{{ $technology->id }}</td>
                                                        <td>
                                                            <img width="80px" height="80px" class="img-fluid" src="{{ asset($technology->image) }}" alt="image">
                                                        </td>
                                                        <td>{{ $technology->name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('technology.edit', $technology->id) }}" class="btn btn-sm btn-warning mr-1" title="Edit Role">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <form class="d-inline-block" action="{{ route('technology.category.destroy', $technology->id) }}" method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">No Data Found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $technologies->links()  }}
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
