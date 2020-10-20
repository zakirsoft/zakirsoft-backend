@extends('layouts.admin')

@section('title')
    Career - ZakirSoft
@endsection

@section('career')
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
                        <h5>Career</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Career</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">


                @if (session('insert'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('insert') }}
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
                @if (session('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('error') }}
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
                                    <h5>Edit Career Contentr</h5>
                                        @if ($career_list_count <= 2 )
                                            <button  type="button" class="btn btn-primary waves-effect float-right" data-toggle="modal" data-target="#add_career"><i class="fas fa-plus"></i> Add Career</button>
                                        @endif
                                </div>
                                <div class="card-block">
                                    @include('notify::messages')
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
                                                    <th>ID</th>
                                                    <th>Career Title</th>
                                                    <th>Career Content</th>

                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($career_list as $key => $career)
                                                <tr>
                                                    <th scope="row">{{ $career_list->firstItem() + $key }}</th>
                                                    <td>{{ $career->title }}</td>
                                                    <td>{{ $career->content }}</td>

                                                    <td>
                                                        <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-cog"></i> Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item text-info btn btn-sm" href="{{ route('career.edit', $career->id) }}"><i class="far fa-edit"></i> Edit</a>
                                                          <form action="{{ route('career.destroy', $career->id) }}" method="POST">
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
                                        {{ $career_list->links()  }}

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
          <h5 class="modal-title" id="exampleModal3Label">Add Carrer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('career.store') }}" method="POST">
            @csrf
        <div class="modal-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input required name="title" type="text" class="form-control" id="title" placeholder="Enter Title of Career">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <input required name="content" type="text" class="form-control" id="content" placeholder="Enter Content of Career">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>


@endsection
