@extends('layouts.admin')

@section('title')
    Portfolio - ZakirSoft
@endsection

@section('portfolio')
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
                            <h5>Portfolio</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio</a>
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
                                        <h5>Portfolio</h5>
                                        @can('portfolio create')
                                            <a href="{{ route('portfolio.create') }}"> <button
                                                    class="btn btn-primary float-right"><i class="fas fa-plus"></i></button></a>
                                        @endcan
                                        @can('category create')
                                            <a href="{{ route('portfolio.category.index') }}"> <button
                                                    class="btn btn-primary float-right mr-2"><i class="fas fa-arrow-left"></i>
                                                    Category List</button></a>
                                        @endcan
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">ID</th>
                                                        <th width="10%">Image</th>
                                                        <th width="25%">Title</th>
                                                        <th width="15%">Category Name</th>
                                                        <th width="15%">Live Link</th>
                                                        <th width="10%">Project Length</th>
                                                        <th width="20%" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="sortable">
                                                    @forelse ($portfolio_list as $key => $portfolio)
                                                        <tr data-id="{{ $portfolio->id }}">
                                                            <th scope="row">{{ $portfolio_list->firstItem() + $key }}</th>
                                                            <td>
                                                                <img width="50px" height="50px"
                                                                    src="{{ asset($portfolio->image) }}" alt="" srcset="">
                                                            </td>
                                                            <td>{{ $portfolio->title }}</td>
                                                            <td>{{ $portfolio->category->name }}</td>

                                                            <td>{{ $portfolio->live_link }}</td>
                                                            <td>{{ $portfolio->project_length }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                                                                    class="btn btn-sm btn-warning mr-1" title="Edit Role">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <a href="{{ route('portfolio.show', $portfolio->id) }}"
                                                                    class="btn btn-sm btn-info mr-1" title="Show Role">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('portfolio.destroy', $portfolio->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button
                                                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                                                        class="btn btn-sm btn-danger text-light"><i
                                                                            class="far fa-trash-alt"></i></button>
                                                                </form>
                                                                <div class="handle btn btn-success btn-sm ml-1"><i
                                                                        class="fas fa-hand-rock"></i></div>
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
                                            {{ $portfolio_list->links() }}
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function() {
        $("#sortable").sortable({
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
            $(selector).each(function(index, element) {
                order.push({
                    id: $(this).attr('data-id'),
                    position: index + 1
                });
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('portfolio.sort') }}",
                data: {
                    order: order,
                },
                success: function(response) {
                    toastr.success(response.message, 'Success')
                }
            });
        }
    });

</script>
@endsection
