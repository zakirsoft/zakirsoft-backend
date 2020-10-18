@extends('layouts.app')

@section('title')
Users View - ZakirSoft
@endsection

@section('users')
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
                        <h5>Role</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Management</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Role</a>
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
                                <div class="card-header d-flex justify-content-between">
                                    <h5>All Role</h5>
                                    <a href="{{ url('management/role/create') }}" class="btn btn-sm btn-primary mr-1" title="Create a User"><i class="fas fa-plus-square pr-1"></i>Create</a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Permission</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>admin</td>
                                                    <td>
                                                        <div class="badge badge-primary">post list</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">post create</div>
                                                        <div class="badge badge-primary">post edit</div>
                                                        <div class="badge badge-primary">post delete</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="" class="btn btn-sm btn-warning mr-1" title="Edit Role"><i class="far fa-edit"></i></a>
                                                        <a href="{{ url('management/role/permission-assign') }}" class="btn btn-sm btn-primary mr-1" title="Assign Permission"><i class="far fa-hand-paper"></i></a>
                                                        <form action="" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>moderator</td>
                                                    <td>
                                                        <div class="badge badge-primary">post list</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">post show</div>
                                                        <div class="badge badge-primary">post create</div>
                                                        <div class="badge badge-primary">post edit</div>
                                                        <div class="badge badge-primary">post delete</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project list</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project show</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                        <div class="badge badge-primary">project create</div>
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="" class="btn btn-sm btn-warning mr-1" title="Edit Role"><i class="far fa-edit"></i></a>
                                                        <a href="{{ url('management/role/permission-assign') }}" class="btn btn-sm btn-primary mr-1" title="Assign Permission"><i class="far fa-hand-paper"></i></a>
                                                        <form action="" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                                        </form>
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

@endsection
