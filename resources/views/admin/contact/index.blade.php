@extends('layouts.admin')

@section('title')
    Contact Message - ZakirSoft
@endsection

@section('contact')
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
                    <i class="fas fa-inbox bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Contact Message</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                        <a href="{{ route('dashboard.index') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Message</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                @if (session('delete')) <div class="alert alert-danger bg-danger" role="alert">{{ session('delete') }}</div> @endif
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Contact</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th class="text-center">Message</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contacts as $contact)
                                                <tr>
                                                <th scope="row">{{$contact->id }}L</th>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->subject }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td class="text-center">
                                                <form action="{{ route('contact.destroy', $contact->id ) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger btn-round"><i class="far fa-trash-alt"></i> Remove</button>
                                                    </form>
                                                </tr>
                                                @endforeach
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
