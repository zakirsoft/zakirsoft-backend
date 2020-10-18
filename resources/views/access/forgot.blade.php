@extends('access.app')

@section('title')
    Recover Password - ZakirSoft
@endsection

@section('content')
<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form class="md-float-material form-material">
                    <div class="text-center">
                        {{-- <img src="png/logo.png" alt="logo.png"> --}}
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Recover your password</h3>
                                </div>
                            </div>
                            {{-- <p class="text-muted text-center p-b-5">Session Notifications</p> --}}
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Your E-Mail Address</label>
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
                                    <p class="text-inverse text-left"><a href="{{ url('signin') }}"><b>Back to
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
