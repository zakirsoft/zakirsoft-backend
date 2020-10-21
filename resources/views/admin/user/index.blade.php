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
                        <h5>Memebers</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Memebers</a>
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

                @if (session('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
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
                                <div class="card-header d-flex justify-content-between">
                                    <h5>All Users ({{ $user_count }})</h5>
                                    <a href="{{ url('user/create') }}" class="btn btn-sm btn-primary mr-1" title="Create a User"><i class="fas fa-plus-square pr-1"></i>Create</a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>User</th>
                                                    <th>E-Mail</th>
                                                    <th class="text-center">Image</th>
                                                    <th>Role</th>
                                                    <th>Registered</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($users as $key => $user)
                                                <tr>
                                                    <td>{{ $users->firstItem() + $key }}</td>
                                                    <th scope="row">{{ $user->name }} <br></th>
                                                    <td>{{ $user->email }}</td>
                                                    <td class="text-center">
                                                        <img src="{{ asset($user->image) }}" class="img-thumbnail" style="max-width: 100px; max-height: 100px; overflow:hidden">
                                                    </td>
                                                    <td>
                                                        @foreach ($user->roles as $role)
                                                            <div class="badge badge-primary">
                                                                {{ $role->name }}
                                                            </div>
                                                        @endforeach
                                                    </td>
                                                    <td class="text-muted">{{ $user->created_at->format('d/m/Y') }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning mr-1" title="Edit User"><i class="far fa-edit"></i></a>
                                                        <a href="{{ route('RoleAssign', $user->id) }}" class="btn btn-sm btn-primary mr-1" title="Manage Role"><i class="fas fa-lock"></i></a>
                                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
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
                                    </div>
                                    {{ $users->links() }}
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
