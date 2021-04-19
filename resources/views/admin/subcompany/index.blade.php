@extends('layouts.admin')

@section('title')
    Subcompany List - ZakirSoft
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
                    <i class="feather icon-credit-card bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Subcompany List</h5>
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
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Subcompany List</h5>
                                    <a href="{{ route('subcompany.create') }}"> <button class="btn btn-primary float-right"><i class="fas fa-plus"></i></button></a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="5%">ID</th>
                                                    <th width="15%">Title</th>
                                                    <th width="10%">Logo</th>
                                                    <th width="20%">Banner</th>
                                                    <th width="35%">Details</th>
                                                    <th width="15%" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($subcompanies as $key => $company)
                                                <tr>
                                                    <th scope="row">{{ $subcompanies->firstItem() + $key }}</th>
                                                    <td>{{ $company->title }}</td>
                                                    <td>
                                                        <img width="100px" height="100px" src="{{asset($company->logo) }}" alt="" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <img width="200px" height="200px" src="{{asset($company->banner) }}" alt="" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p><strong>Total Downloads: </strong>{{ $company->downloads }}</p>
                                                        <p><strong>Total Views: </strong>{{ $company->views }}</p>
                                                        <strong>Description: </strong><span class="d-inline-block">{!! $company->description !!}</span>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="{{ route('portfolio.edit', $company->id) }}" class="btn btn-sm btn-warning" title="Edit Role">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                         <form action="{{ route('portfolio.destroy', $company->id) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-sm btn-danger text-light"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                        <a href="{{ route('portfolio.show', $company->id) }}" class="btn btn-sm btn-info" title="Show Role">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
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
                                        {{ $subcompanies->links()  }}
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
