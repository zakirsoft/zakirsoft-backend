@extends('layouts.app')

@section('title')
    Sign in - ZakirSoft
@endsection

@section('content')
<section class="login-block m-t-50">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="{{ route('login') }}" class="md-float-material form-material">
                    @csrf
                    <div class="text-center">
                        <img height="40px" src="https://zakirsoft.com/frontend/assets/images/logo/1.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control @error('email') is-invalid fill @enderror fill" name="email" value="{{ old('email') }}" required>
                                <span class="form-bar"></span>
                                <label class="float-label">Username</label>
                                @error('email')<span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input id="password" type="password" class="form-control @error('password') is-invalid fill @enderror fill" name="password" required>
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>
                                @error('password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right float-right">
                                        <a href="{{ route('password.request') }}" class="text-right f-w-600"> Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
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
