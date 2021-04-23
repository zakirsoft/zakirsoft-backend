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
                        <h5>Team</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Team</a>
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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="card">
                                <div class="card-header align-items-center justify-content-between d-flex">
                                    <h5>Team</h5>
                                @can('team create')
                                <a href="{{ route('team.create') }}" type="button" class="btn btn-primary text-light btn-sm waves-effect float-right" data-toggle="modal" data-target="#add_career"><i class="fas fa-plus"></i></a>
                                @endcan
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive text-center">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sortable">
                                                @forelse ($teams as $team)
                                                <tr data-id="{{ $team->id }}">
                                                    <td class="text-center">{{ $team->name }}</td>
                                                    <td class="text-center">{{ $team->position }}</td>
                                                    <td class="text-center"><img width="100px" src="{{ asset($team->image) }}" alt=""></td>
                                                     <td class="text-center">
                                                        <div>
                                                            <label class="switch ">
                                                                <input data-id="{{ $team->id }}" type="checkbox" class="success toggle-switch" {{ $team->status == 1 ? 'checked':'' }}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm btn-warning " title="Edit Role">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('team.destroy', $team->id) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-sm btn-danger text-light"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                        <div class="handle btn btn-success btn-sm"><i class="fas fa-hand-rock"></i></div>
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
          <h5 class="modal-title" id="exampleModal3Label">Add Team</h5>
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
                    <label for="content">Image</label><br>
                    <img class="my-2" id="single_image_preview"/>
                    <input onchange="readURL(this)" type="file" class="form-control" name="image" id="position" required id="single_image">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection


@section('style')
<style>
    /* Image Style  */
    img{ max-width:80px; }
    input[type=file]{ padding:10px; }

    .switch {
        position: relative;
        display: inline-block;
        width: 35px;
        height: 19px;
    }
    /* Hide default HTML checkbox */
    .switch input {display:none;}
        /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }
    .slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 3px;
        bottom: 2px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }
    input.success:checked + .slider {
        background-color: #28a745;
    }
    input:checked + .slider:before {
        -webkit-transform: translateX(15px);
        -ms-transform: translateX(15px);
        transform: translateX(15px);
    }
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }
    .slider.round:before {
        border-radius: 50%;
    }
</style>
@endsection

@section('script')
<script>
    /* image 1 */
    $('#single_image_preview').hide();
    $('#reaset_multiple').hide();
    function readURL(input) {
      if (input.files && input.files[0]) {
        $('#single_image_preview').show();
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#single_image_preview').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

    $(function() {
        $("#sortable" ).sortable({
            items: 'tr',
            cursor: 'move',
            opacity: 0.4,
            scroll: false,
            handle: '.handle',
            dropOnEmpty: false,
            update: function() {
                sendTaskOrderToServer('#sortable tr');
            },
            classes: {
                "ui-sortable": "highlight"
            },
        });
        $("#sortable").disableSelection();
        function sendTaskOrderToServer(selector) {
            var order = [];
            $(selector).each(function(index,element) {
                order.push({
                    id: $(this).attr('data-id'),
                    position: index+1
                });
            });
            console.log(order)
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('team.sorting') }}",
                data: {
                    order:order,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    toastr.success(response.message,'Success');
                }
            });
        }
    });

     $('.toggle-switch').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route("team.status.change") }}',
                data: {'status': status, 'id': id},
                success: function(response){
                    toastr.success(response.message,'Success');
                }
            });
        })
</script>
@endsection
