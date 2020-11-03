@extends('layouts.app')

@section('title')
Email verification - ZakirSoft
@endsection

@section('content')
<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
               
                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Verify Your Email Address</h3>
                            </div>
                        </div>
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif
                        <p class="m-4">Before proceeding, please check your email for a verification link. If you didn't receive the email,</p>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('click here to request another') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
