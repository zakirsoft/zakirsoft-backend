@extends('layouts.admin')

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

                @if (session('update'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('assign'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('assign') }}
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
                                    <a href="{{ route('RoleCreate') }}" class="btn btn-sm btn-primary mr-1"
                                        title="Create a User"><i class="fas fa-plus-square pr-1"></i>Create</a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Title</th>
                                                    <th>Permission</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($roles as $key => $role)
                                                <tr>
                                                    <th scope="row">{{ $roles->firstItem() + $key }}</th>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        @foreach($role->permissions as $permission)
                                                            <div class="badge badge-primary">{{ $permission->name }}</div>
                                                        @endforeach
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('RoleEdit', $role->id) }}" class="btn btn-sm btn-warning mr-1" title="Edit Role">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('PermissionAssign', $role->id) }}" class="btn btn-sm btn-primary mr-1" title="Assign Permission">
                                                            <i class="fas fa-lock"></i>
                                                        </a>
                                                        <a href="{{ route('RoleDelete', $role->id) }}" class="btn btn-sm btn-danger text-light">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No Role Found</td>
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
