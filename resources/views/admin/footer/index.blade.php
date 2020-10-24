@extends('layouts.admin')

@section('title')
Footer Content - ZakirSoft
@endsection

@section('footer')
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
                        <h5>Footer Section</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Footer</a>
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
                                    <h5>Footer Content</h5>
                                    @can('footer create')
                                    @if ($ContentCount < 1) <button type="button"
                                        class="btn btn-primary waves-effect float-right" data-toggle="modal"
                                        data-target="#add_content"><i class="fas fa-plus"></i></button>
                                        @endif
                                        @endcan
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>E-Mail</th>
                                                    <th>Content</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($footers as $footer)
                                                <tr>
                                                    <td>{{$footer->email}}</td>
                                                    <td>{{$footer->content}}</td>
                                                    <td class="d-flex">
                                                        @can('footer edit')
                                                        <a href="#" class="btn btn-sm btn-warning mr-1"
                                                            data-toggle="modal"
                                                            data-target="#edit_content{{$footer->id}}"
                                                            title="Edit User"><i class="far fa-edit"></i></a>
                                                        @endcan
                                                        @can('footer delete')
                                                        <form action="{{ route('footer.destroy', $footer->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </form>
                                                        @endcan
                                                    </td>
                                                </tr>

                                                {{-- Footer Content Edit --}}
                                                <div class="modal fade" id="edit_content{{$footer->id}}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModal3Label"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModal3Label">Update
                                                                    Content</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('footer.update', $footer->id) }}"
                                                                method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" value="{{$footer->id}}"
                                                                    name="footer_id">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="email">E-Mail</label>
                                                                        <input
                                                                            value="{{ $footer->email ?? old('email') }}"
                                                                            required name="email" type="text"
                                                                            class="form-control" id="email"
                                                                            placeholder="Enter E-mail address">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="content">Content</label>
                                                                        <textarea required name="content" type="text"
                                                                            class="form-control" id="content"
                                                                            placeholder="Enter Content of Footer"
                                                                            rows="8">{{ $footer->content ?? old('content') }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancle</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Footer Content Edit --}}
                                                @empty
                                                <tr>
                                                    <td class="text-center" colspan="4">Content not Found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Social Profile's</h5>
                                    @can('footer create')
                                    <button type="button" class="btn btn-primary waves-effect float-right mr-2"
                                        data-toggle="modal" data-target="#add_social"><i class="fas fa-plus"></i></button>
                                    @endcan
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Social Media</th>
                                                    <th>Profile Name</th>
                                                    <th>Profile Link</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($socials as $social)
                                                <tr>
                                                    <td><i
                                                            class="{{ $social->social_media }} pr-2"></i>{{ $social->social_media }}
                                                    </td>
                                                    <td>{{ $social->profile_name }}</td>
                                                    <td>{{ $social->profile_link }}</td>
                                                    <td class="d-flex">
                                                        @can('footer edit')
                                                        <a href="" class="btn btn-sm btn-warning mr-1" title="Edit User"
                                                            data-toggle="modal"
                                                            data-target="#edit_social{{$social->id}}"><i
                                                                class="far fa-edit"></i></a>
                                                        @endcan
                                                        @can('footer delete')
                                                        <form action="{{ route('social.destroy', $social->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </form>
                                                        @endcan
                                                    </td>
                                                </tr>
                                                {{-- Social Profile Update --}}
                                                <div class="modal fade" id="edit_social{{$social->id}}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModal3Label"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModal3Label">Add
                                                                    Social Media</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('social.update', $social->id) }}"
                                                                method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" value="{{$social->id}}"
                                                                    name="social_id">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <select class="form-control" id="social_name"
                                                                            value="{{ $social->social_name ?? old('social_name') }}"
                                                                            required name="social_name">
                                                                            <option value="">Social Media</option>
                                                                            <option value="fab fa-behance">Behance
                                                                            </option>
                                                                            <option value="fab fa-dribbble">Dribbble
                                                                            </option>
                                                                            <option value="fab fa-github">Github
                                                                            </option>
                                                                            <option value="fab fa-facebook-f">Facebook
                                                                            </option>
                                                                            <option value="fab fa-twitter">Twitter
                                                                            </option>
                                                                            <option value="fab fa-instagram">Instagram
                                                                            </option>
                                                                            <option value="fab fa-linkedin-in">Linkedin
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profile_name">Profile Name</label>
                                                                        <input
                                                                            value="{{ $social->profile_name ?? old('profile_name') }}"
                                                                            required name="profile_name" type="text"
                                                                            class="form-control" id="profile_name"
                                                                            placeholder="Zakir Soft">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="social_link">Social Link</label>
                                                                        <input
                                                                            value="{{ $social->social_link ?? old('social_link') }}"
                                                                            required name="social_link" type="text"
                                                                            class="form-control" id="social_link"
                                                                            placeholder="http://127.0.0.1/me">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Social Profile Update --}}
                                                @empty
                                                <tr>
                                                    <td class="text-center" colspan="5">Social profile not Found</td>
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

{{-- Footer Content Modal --}}
<div class="modal fade" id="add_content" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">Add Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('footer.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input value="{{ old('email') }}" required name="email" type="text" class="form-control"
                            id="email" placeholder="Enter E-mail address">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea value="{{ old('content') }}" required name="content" type="text" class="form-control"
                            id="content" placeholder="Enter Content of Footer" rows="8"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Social Links Modal --}}
<div class="modal fade" id="add_social" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">Add Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('social.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" id="social_name" value="{{ old('social_name') }}" required
                            name="social_name">
                            <option value="">Social Media</option>
                            <option value="fab fa-behance">Behance</option>
                            <option value="fab fa-dribbble">Dribbble</option>
                            <option value="fab fa-github">Github</option>
                            <option value="fab fa-facebook-f">Facebook</option>
                            <option value="fab fa-twitter">Twitter</option>
                            <option value="fab fa-instagram">Instagram</option>
                            <option value="fab fa-linkedin-in">Linkedin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profile_name">Profile Name</label>
                        <input value="{{ old('profile_name') }}" required name="profile_name" type="text"
                            class="form-control" id="profile_name" placeholder="Zakir Soft">
                    </div>
                    <div class="form-group">
                        <label for="social_link">Social Link</label>
                        <input value="{{ old('social_link') }}" required name="social_link" type="text"
                            class="form-control" id="social_link" placeholder="http://127.0.0.1/me">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
