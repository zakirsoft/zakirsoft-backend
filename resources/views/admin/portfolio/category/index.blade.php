@extends('layouts.admin')

@section('title')
Career - ZakirSoft
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
                        <h5>Portfolio Category</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio Category</a>
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
                                    <h5>Portfolio Category</h5>
                                    @can('category create')
                                    <button type="button" class="btn btn-primary waves-effect float-right"
                                        data-toggle="modal" data-target="#add_career"><i class="fas fa-plus"></i></button>
                                    @endcan
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL</th>
                                                    <th class="text-center">Category Name</th>
                                                    <th class="text-center">Category Status</th>
                                                    <th class="text-center">Status Change</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($portfolio_category as $key => $category)
                                                <tr>
                                                    <th class="text-center" scope="row">
                                                        {{ $portfolio_category->firstItem() + $key }}</th>
                                                    <td class="text-center">{{ $category->name }}</td>

                                                    @can('category status')
                                                    @if ($category->status == 1)
                                                    <td class="text-center"><span
                                                            class="badge badge-success">Active</span></td>
                                                    @else
                                                    <td class="text-center"><span
                                                            class="badge badge-danger">Inactive</span></td>
                                                    @endif

                                                    @if ($category->status == 1)
                                                    <td class="text-center"><a
                                                            href="{{ route('portfolio.category.inactive',$category->id) }}"><button
                                                                class="btn btn-warning"><i
                                                                    class="fa fa-arrow-down"></i></button></a></td>
                                                    @else
                                                    <td class="text-center"><a
                                                            href="{{ route('portfolio.category.active',$category->id) }}"><button
                                                                class="btn btn-success"><i
                                                                    class="fa fa-arrow-up"></i></button></a></td>
                                                    @endif
                                                    @endcan
                                                    <td class="text-center">
                                                        <a href="{{ route('portfolio.category.edit', $category->id) }}" class="btn btn-sm btn-warning mr-1" title="Edit Role">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('portfolio.category.destroy', $category->id) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-sm btn-danger text-light"><i class="far fa-trash-alt"></i></button>
                                                        </form>
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
                                        {{ $portfolio_category->links()  }}
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

<div class="modal fade" id="add_career" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('portfolio.category.create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Category Name</label>
                        <input required name="name" type="text" class="form-control" id="title"
                            placeholder="Enter category name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>
                        Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
