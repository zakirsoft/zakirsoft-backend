@extends('layouts.admin')

@section('title')
OurTeam - ZakirSoft
@endsection

@section('ourteam')
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
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Edit Team</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Edit Portfolio</a>
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
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                                <div class="card-header align-items-center justify-content-between d-flex">
                                    <h5>Edit Team</h5>
                                    <a href="{{ route('team.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Show Member</a>
                                </div>
                                <div class="card-block">

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form id="main" method="POST" action="{{ route('team.update', $teams->id) }}"enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Current Image </label>
                                            <div class="col-sm-10">
                                                <img width="150px" src="{{ asset($teams->image) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image </label>
                                            <div class="col-sm-10">
                                                <img class="my-2" id="single_image_preview"/>
                                                <input onchange="readURL(this)" type="file" class="form-control" name="image" id="position" id="single_image">
                                                {{-- <input type="file" class="form-control" name="image" id="position"> --}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" id="name"placeholder="Enter Name" value="{{ $teams->name }}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Position</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="position" id="name" placeholder="Enter  Position" value="{{ $teams->position }}">
                                            </div>

                                        </div>
                                        <div class="form-group row pt-4">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0"><i class="fas fa-plus"></i> Update</button>
                                            </div>
                                        </div>
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
<style>
    /* Image Style  */

        img{
            max-width:80px;
        }
        input[type=file]{
          padding:10px;
        }

</style>
@endsection


@section('script')
<script>

         /* image 1 */
    $('#single_image_preview').hide();
    // $('#single_image_preview_remove').hide();
    $('#reaset_multiple').hide();
    function readURL(input) {
      if (input.files && input.files[0]) {
        $('#single_image_preview').show();
        // $('#single_image_preview_remove').show();
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#single_image_preview').attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }

</script>
@endsection


