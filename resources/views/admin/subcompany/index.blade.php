@extends('layouts.admin')

@section('title')
    Subcompany List - ZakirSoft
@endsection

@section('subcompany')
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
                        <h5>Subcompany List</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Subcompanty</a>
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
                                    <h5>Subcompany List</h5>
                                    {{-- @can('subcompany show') --}}
                                    <a href="{{ route('subcompany.create') }}"> <button class="btn btn-primary float-right"><i class="fas fa-plus"></i></button></a>
                                    {{-- @endcan --}}
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="5%">ID</th>
                                                    <th width="15%">Title</th>
                                                    <th width="10%">Logo</th>
                                                    <th width="20%">Banner</th>
                                                    <th width="35%">Details</th>
                                                    <th width="15%" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sortable">
                                                @forelse ($subcompanies as $key => $company)
                                                <tr data-id="{{ $company->id }}">
                                                    <th scope="row">{{ $company->id }}</th>
                                                    <td>{{ $company->title }}</td>
                                                    <td>
                                                        <img width="100px" height="100px" src="{{asset($company->logo) }}" alt="" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <img width="200px" height="100px" src="{{asset($company->banner) }}" alt="" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <p><strong>{{ $company->stats1_text }}: </strong>{{ $company->stats1_value }}</p>
                                                        <p><strong>{{ $company->stats2_text }}: </strong>{{ $company->stats2_value }}</p>
                                                    </td>

                                                    <td class="text-center">
                                                        {{-- @can('subcompany edit') --}}
                                                        <a href="{{ route('subcompany.edit', $company->id) }}" class="btn btn-sm btn-warning" title="Edit Role">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        {{-- @endcan --}}
                                                        {{-- @can('subcompany delete') --}}
                                                         <form action="{{ route('subcompany.destroy', $company->id) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-sm btn-danger text-light"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                        {{-- @endcan --}}
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
@endsection

@section('script')
     <script>
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
                    url: "{{ route('subcompany.sorting') }}",
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
