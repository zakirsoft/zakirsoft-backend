@extends('layouts.admin')

@section('title')
Footer Content - ZakirSoft
@endsection

@section('footer')
active pcoded-trigger
@endsection

@section('content')
@include('notify::messages')
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
                        <h5>Footer Content</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Footer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">


                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if (session('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('danger') }}
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
                                    <h5>Footer Content</h5>

                                    <button type="button" class="btn btn-primary waves-effect float-right"
                                        data-toggle="modal" data-target="#add_content">Add Content</button>

                                    <button type="button" class="btn btn-primary waves-effect float-right"
                                        data-toggle="modal" data-target="#add_social">Add Social Links</button>

                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>E-Mail</th>
                                                    <th>Content</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">0</th>
                                                    <td>Email</td>
                                                    <td>Content</td>
                                                    <td class="d-flex">
                                                        <a href="#" class="btn btn-sm btn-warning mr-1" title="Edit User"><i class="far fa-edit"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary mr-1" title="Manage Role"><i class="fas fa-lock"></i></a>
                                                        <form action="#" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>

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
</div>

{{-- Footer Content Modal --}}
<div class="modal fade" id="add_content" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">Add Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">E-Mail</label>
                        <input value="{{ old('title') }}" required name="title" type="text" class="form-control"
                            id="title" placeholder="Enter E-mail address">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea value="{{ old('content') }}" required name="content" type="text" class="form-control"
                            id="content" placeholder="Enter Content of Footer" rows="8"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Social Links Modal --}}
<div class="modal fade" id="add_social" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">Add Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Social Name</label>
                        <input value="{{ old('title') }}" required name="title" type="text" class="form-control"
                            id="title" placeholder="Ex: Facebook">
                    </div>
                    <div class="form-group">
                        <label for="title">Profile Name</label>
                        <input value="{{ old('title') }}" required name="title" type="text" class="form-control"
                            id="title" placeholder="Zakir Soft">
                    </div>
                    <div class="form-group">
                        <label for="title">Social Link</label>
                        <input value="{{ old('title') }}" required name="title" type="text" class="form-control"
                            id="title" placeholder="http://127.0.0.1/me">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection