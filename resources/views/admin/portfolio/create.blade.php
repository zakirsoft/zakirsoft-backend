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
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Add Portfolio</a>
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
                                    <h5>Add Portfolio</h5>
                                   <a href="{{ route('portfolio.category.index') }}"> <button type="button" class="btn btn-primary waves-effect float-right"><i class="fas fa-plus"></i> Add Category</button></a>
                                </div>
                                <div class="card-block">

                                        @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show">
                                           Please provide required field conditions!
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                    <form id="main" method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Seletct Category</label>
                                                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                                        <option value="">Select Work Type</option>
                                                        @foreach ($category_list as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach

                                                    </select>
                                                    @error('category_id') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title of Portfolio">
                                                    @error('title') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Project Length</label>
                                                    <input value="{{ old('project_length') }}" type="text" class="form-control  @error('project_length') is-invalid @enderror" name="project_length" placeholder="Enter Project Length of Portfolio">
                                                    @error('project_length') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Thumbnail Image</label><br>
                                                    <img class="my-2" id="single_image_preview"/>
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" readonly>
                                                        <div class="input-group-btn">
                                                            <span class="fileUpload btn btn-primary">
                                                                <span class="upl" id="upload">Upload single file</span>
                                                                <input onchange="readURL(this)" name="image" type="file" class="upload up" id="single_image"/>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Multiple Image</label><br>
                                                    <div id="multiple_image_preview"></div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" readonly>
                                                          <div class="input-group-btn">
                                                              <span class="fileUpload btn btn-primary">
                                                                  <span class="upl" id="upload">Upload multiple files</span>
                                                                  <input multiple onchange="preview_image()" id="upload_file" name="m_image[]" type="file" class="upload up"/>
                                                              </span>
                                                          </div>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Name</label>
                                                    <input value="{{ old('client_name') }}" type="text" class="form-control  @error('client_name') is-invalid @enderror" name="client_name" placeholder="Enter Client Name of Portfolio">
                                                    @error('client_name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Client Email</label>
                                                     <input value="{{ old('client_email') }}" type="text" class="form-control @error('client_email') is-invalid @enderror" name="client_email" placeholder="Enter Client Email of Portfolio">
                                                     @error('client_email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Live Link  <span style="font-size: 11px;" class="text-danger">https://example.com</span> </label>
                                                   <input value="{{ old('live_link') }}" type="text" class="form-control @error('live_link') is-invalid @enderror" name="live_link" >
                                                   @error('live_link') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bahance Link <span style="font-size: 11px;" class="text-danger">https://example.com</span>  </label><br>
                                                     <input value="{{ old('bahance_link') }}" type="text" class="form-control  @error('bahance_link') is-invalid @enderror" name="bahance_link">
                                                     @error('bahance_link') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Our Role</label>
                                                    <textarea id="editor5" type="text" class="form-control @error('our_role') is-invalid @enderror" name="our_role" placeholder="Enter Role of Portfolio">{{ old('our_role') }}</textarea>
                                                    @error('our_role') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Tools Used </label>
                                                    <textarea id="editor2" type="text" class="form-control @error('tool_used') is-invalid @enderror" name="tool_used" placeholder="Write Tool User of Portfolio.... ">{{ old('tool_used') }}</textarea>
                                                    @error('tool_used') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea  id="editor" type="text" class="form-control @error('description') is-invalid @enderror"  name="description" placeholder="Write Portfolio content here.... ">{{ old('description') }}</textarea>
                                            @error('description') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary  m-b-0"><i class="fas fa-plus"></i> Add</button>
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
    .ck-editor__editable_inline {
        min-height: 170px;
    }

    /* Image Style  */
        img{
            max-width:80px;
        }
        input[type=file]{
          padding:10px;
        }

          /* image 2 */

          .it .btn-orange
          {
              background-color: blue;
              border-color: #777!important;
              color: #777;
              text-align: left;
            width:100%;
          }
          .it input.form-control
          {

              border:none;
            margin-bottom:0px;
              border-radius: 0px;
              border-bottom: 1px solid #ddd;
              box-shadow: none;
          }
          .it .form-control:focus
          {
              border-color: #ff4d0d;
              box-shadow: none;
              outline: none;
          }
          .fileUpload {
              position: relative;
              overflow: hidden;
          }
          .fileUpload input.upload {
              position: absolute;
              top: 0;
              right: 0;
              margin: 0;
              padding: 0;
              font-size: 20px;
              cursor: pointer;
              opacity: 0;
              filter: alpha(opacity=0);
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
    ClassicEditor
        .create( document.querySelector( '#editor5' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );

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

/* image 2 */
  $(document).on('change','.up', function(){
            var names = [];
            var length = $(this).get(0).files.length;
                for (var i = 0; i < $(this).get(0).files.length; ++i) {
                    names.push($(this).get(0).files[i].name);
                }

                if(length>2){
                  var fileName = names.join(', ');
                  $(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
                }
                else{
                    $(this).closest('.form-group').find('.form-control').attr("value",names);
                }
       });

// multiple image
function preview_image() {
    var total_file=document.getElementById("upload_file").files.length;
    for(var i=0;i<total_file;i++){
        $('#multiple_image_preview').append("<img class='my-2' src='"+URL.createObjectURL(event.target.files[i])+"'>&nbsp;&nbsp;");
    }
}

</script>
@endsection
