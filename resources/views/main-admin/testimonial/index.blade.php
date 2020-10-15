@extends('layouts.app')

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
                        <h5>Testimonials</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Testimonial</a>
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
                                    <h5>Default Testimonials</h5>
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
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Purpose</th>
                                                    <th>Testimonial Content</th>
                                                    <th class="text-center">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($testimonials as $key => $testimonial)
                                                <tr>
                                                    <th scope="row">{{ $testimonial->id }}</th>
                                                    <td>{{ $testimonial->name }}</td>
                                                    <td>{{ $testimonial->position }}</td>
                                                    <td>{{ $testimonial->purpose }}</td>
                                                    <td>{{ $testimonial->content }}</td>
                                                    <td class="text-center">
                                                        <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn-sm btn-danger m-1"><i class="far fa-trash-alt pr-2"></i>Remove</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td>None</td>
                                                    <td>No Data Found</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
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
