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
                                                        @if ($post->status)
                                                            <span class="badge badge-success">Active</span>
                                                        @else
                                                            <span class="badge badge-warning">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        @if ($post->status)
                                                            <a href="{{ route('jobpost.inactive', $post->id) }}" class="btn btn-sm btn-warning" title="Inactive Post">
                                                                <i class="fa fa-arrow-down"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('jobpost.active', $post->id) }}" class="btn btn-sm btn-success" title="Active Post">
                                                                <i class="fa fa-arrow-up"></i>
                                                            </a>
                                                        @endif
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
    </script>
@endsection
