@extends('layouts.admin')

@section('title')
    Role Assign - ZakirSoft
@endsection

@section('user')
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
                        <h5>Role Assign</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Management</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Role</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Assgin</a>
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
                                <div class="card-header d-flex justify-content-between">
                                    <h5>Role assign to user</h5>
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary mr-1"
                                        title="Return Back"><i class="fas fa-arrow-alt-circle-left pr-1"></i>Back</a>
                                </div>
                                <div class="card-block col-md-6 offset-3 col-sm-12 pb-5">
                                    <form action="{{ route('RoleAssignStore', $user->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$user->id}}" name="user_id">
                                        <div class="form-group">
                                            <label for="name">User</label>
                                            <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                                        </div>
                                        <div class="form-group pb-3">
                                            <label for="role">Role</label>
                                            <select class="js-example-basic-multiple col-10" name="roles[]" multiple id="role">
                                                @foreach ($userRoles as $role)
                                                    <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                                @endforeach
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square pr-1"></i>Assign</button>
                                    </form>
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

@section('style')
    <link rel="stylesheet" href="{{ asset('admin') }}/css/select2.min.css" />
@endsection

@section('script')
    <script src="{{ asset('admin') }}/js/select2.full.min.js"></script>
    <script>
        $(".js-example-basic-multiple").select2();
    </script>
@endsection
