@extends('layouts.admin')

@section('title')
    Job Post - ZakirSoft
@endsection

@section('career')
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
                        <h5>Job Posts</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Job Posts</a>
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
                                <div class="card-header">
                                    <h5>Job Posts</h5>
                                    <a href="{{ route('jobpost.create') }}"> <button class="btn btn-primary float-right"><i class="fas fa-plus"></i></button></a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL</th>
                                                    <th class="text-center">Title</th>
                                                    <th class="text-center">Type</th>
                                                    <th class="text-center">Salary</th>
                                                    <th class="text-center">Deadline</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sortable">
                                                @forelse ($posts as $key => $post)
                                                <tr data-id="{{ $post->id }}">
                                                    <th class="text-center" scope="row">{{ $posts->firstItem() + $key }}</th>
                                                    <td class="text-center">{{ $post->title }}</td>
                                                    <td class="text-center">{{ $post->type }}</td>
                                                    <td class="text-center">{{ $post->salary }}</td>
                                                    <td class="text-center">{{ \Carbon\Carbon::parse($post->deadline)->format('d M, Y') }}</td>
                                                    <td class="text-center">
                                                        <div>
                                                            <label class="switch ">
                                                                <input data-id="{{ $post->id }}" type="checkbox" class="success toggle-switch" {{ $post->status == 1 ? 'checked':'' }}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('jobpost.show', $post->id) }}" class="btn btn-sm btn-info" title="Details Post">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('jobpost.edit', $post->id) }}" class="btn btn-sm btn-warning" title="Edit Post">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('jobpost.destroy', $post->id) }}" method="POST" class="d-inline">
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
                                        {{ $posts->links()  }}
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
    <script type="text/javascript">
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
                    url: "{{ route('jobpost.sorting') }}",
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
                url: '{{ route("jobpost.status.change") }}',
                data: {'status': status, 'id': id},
                success: function(response){
                    toastr.success(response.message,'Success');
                }
            });
        })
    </script>
@endsection
