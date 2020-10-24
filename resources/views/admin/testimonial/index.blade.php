@extends('layouts.admin')

@section('title')
    Testimonials - ZakirSoft
@endsection

@section('testimonial')
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
                        <h5>Testimonial</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Testimonial</a>
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
                                    <h5>Testimonial Table</h5>
                                    <a href="{{ route('testimonial.create') }}"> <button class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add Testimonial</button></a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Purpose</th>
                                                    <th style="max-width: 300px">Testimonial Content</th>
                                                    <th class="text-center">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($testimonials as $key => $testimonial)
                                                <tr>
                                                    <th scope="row">{{ $testimonials->firstItem() + $key }}</th>
                                                    <td>{{ $testimonial->name }}</td>
                                                    <td>{{ $testimonial->position }}</td>
                                                    <td>{{ $testimonial->purpose }}</td>
                                                    <td style="max-width: 300px">{{ $testimonial->content }}</td>
                                                    @can('testimonial delete')
                                                    <td class="text-center">
                                                        <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger m-1"><i class="far fa-trash-alt pr-2"></i>Remove</button>
                                                        </form>
                                                    </td>
                                                    @endcan
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No Data Found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $testimonials->links()  }}
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
