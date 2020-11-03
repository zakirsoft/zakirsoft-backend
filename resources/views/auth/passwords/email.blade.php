@extends('layouts.app')

@section('title')
    Recover Password - ZakirSoft
@endsection

@section('content')
<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form method="POST" action="{{ route('password.email') }}" class="md-float-material form-material">
                    @csrf
                    <div class="text-center">
                        <img height="40px" src="https://zakirsoft.com/frontend/assets/images/logo/1.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12 text-center">
                                    <h3 class="txt-primary pb-4">Recover your password</h3>
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control @error('email') is-invalid fill @enderror " name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="form-bar"></span>
                                <label class="float-label">Your E-Mail Address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="https://zakirsoft.com/"><b>Back to
                                                Website</b></a>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    {{-- <img src="png/logo-small-bottom.png" alt="small-logo.png"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
