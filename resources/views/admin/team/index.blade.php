@extends('layouts.admin')

@section('title')
    OurTeam - ZakirSoft
@endsection

@section('team')
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
                        <h5>OurTeam</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">OurTeam</a>
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
                @if (session('update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header align-items-center justify-content-between d-flex">
                                    <h5>Default Team</h5>
                                <a href="{{ route('team.create') }}" type="button" class="btn btn-primary text-light btn-sm waves-effect float-right" data-toggle="modal" data-target="#add_career"><i class="fas fa-plus"></i> Add Member</a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive text-center">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Image</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($teams as $team)
                                                <tr>
                                                    <td class="text-center">{{ $team->name }}</td>
                                                    <td class="text-center">{{ $team->position }}</td>
                                                <td class="text-center"><img width="100px" src="{{ asset($team->image) }}" alt=""></td>

                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-cog"></i> Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item text-info btn btn-sm" href="{{ route('team.edit', $team->id) }}"><i class="far fa-edit"></i> Edit</a>
                                                          <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm text-danger m-1 dropdown-item"></i><i class="far fa-trash-alt"></i> Remove</button>
                                                        </form>
                                                        </div>
                                                      </div>
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

<div class="modal fade" id="add_career" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h5 class="modal-title" id="exampleModal3Label">Team Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
                <div class="form-group">
                  <label for="title">Name</label>
                  <input name="name" type="text" class="form-control" id="title" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                  <label for="content">Position</label>
                  <input name="position" type="text" class="form-control" id="content" placeholder="Enter Your Position" required>
                </div>
                <div class="form-group">
                  <label for="content">Image</label>
                  <input type="file" class="form-control" name="image" id="position" required>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>



@endsection
