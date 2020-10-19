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
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Add Portfolio</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Portfolio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Add Portfolio</a>
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
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('insert') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('insert') }}
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
                                    <h5>Paste here new Portfolio information</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code>
                                        tag</span>
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

                                    <form id="main" method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="title" id="name"
                                                    placeholder="Enter Title of Portfolio">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image </label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" id="position">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Multiple Image</label>
                                            <div class="col-sm-10">
                                                <input multiple type="file" class="form-control" name="multiple_image" id="position">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Client Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="client_name" id="name"
                                                placeholder="Enter Client Name of Portfolio">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Client Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="client_email" id="name"
                                                placeholder="Enter Client Email of Portfolio">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Live Link </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="live_link" id="name"
                                                value="https://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Bahance </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="bahance_link" id="name"
                                                value="https://">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Project Length </label>
                                            <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="project_length" id="name"
                                                    placeholder="Enter Project Length of Portfolio">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Our Role</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="our_role" id="name"
                                                placeholder="Enter Role of Portfolio">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tools Used </label>
                                            <div class="col-sm-10">
                                                <textarea id="editor2" type="text" class="form-control" name="tool_used"
                                                    placeholder="Write Tool User of Portfolio.... "
                                                    ></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description </label>
                                            <div class="col-sm-10">
                                                <textarea id="editor" type="text" class="form-control"  name="description"
                                                    placeholder="Write Portfolio content here.... "
                                                    ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row pt-4">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
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
        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
    border-color: var(--ck-color-base-border);
    height: 130px;
}
.ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
    border-color: var(--ck-color-base-border);
    height: 130px;
}
    </style>
@endsection
@section('script')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
   <script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
   <script>
    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
   <script>
    ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endsection
