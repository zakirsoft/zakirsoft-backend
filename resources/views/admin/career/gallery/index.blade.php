@extends('layouts.admin')

@section('title')
    Galleries - ZakirSoft
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
                        <h5>Career</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Career</a>
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
                          <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-dark d-flex justify-content-between align-items-center">
                                    <h6 class="d-inline mb-2">Gallery Image Add</h6>
                                </div>
                                <div class="card-body">
                                    <form id="dropzoneForm" method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data" class="dropzone" >
                                        @csrf
                                    </form>
                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-success" id="submit-all"><i class="fas fa-sync"></i> Upload Gallery</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Gallery List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL</th>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($galleries as $gallery)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">
                                                        <img height="50px" width="50px" src="{{ asset($gallery->image) }}" alt="">
                                                    </td>
                                                    <td class="text-center">
                                                        {{-- <a href="{{ route('career.edit', $gallery->id) }}" class="btn btn-sm btn-warning mr-1" title="Edit Role">
                                                            <i class="far fa-edit"></i>
                                                        </a> --}}
                                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-danger text-light"><i class="far fa-trash-alt"></i></button>
                                                        </form>
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
                                        {{-- {{ $career_list->links()  }} --}}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <style>
    .dropzone {
        background: white;
        border-radius: 5px;
        border: 2px dashed rgb(0, 135, 247);
        border-image: none;
        max-width: 805px;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.dropzoneForm = {
            autoProcessQueue : false,
            uploadMultiple: true,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 3,
            filesizeBase: 1000,
            addRemoveLinks: true,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            init:function(){
                myDropzone = this;
                $('#submit-all').on('click', function(){
                    myDropzone.processQueue();
                });
                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
                        var _this = this;
                        _this.removeAllFiles();
                        console.log()
                    }
                });
            },
            success: function (response) {
                toastr.success(response.message,'Success');
                location.reload();
            },
            error: function (file, response) {
                toastr.success('Image upload failed','Success');
            }
        };
    </script>
@endsection
