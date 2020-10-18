@extends('access.app')

@section('title')
    Registration - ZakirSoft
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
                                    <h3 class="text-center txt-primary">Registration</h3>
                                </div>
                            </div>
                            {{-- <p class="text-muted text-center p-b-5">Session Notifications</p> --}}
                            <div class="form-group form-primary">
                                <input type="text" name="username" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Username</label>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">E Mail Address</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="confirm-password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" name="accept_terms" class="form-check-input" id="exampleCheck1">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">I read and accept Terms & Conditions.</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" name="weekly_newsletter" class="form-check-input" id="exampleCheck1">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Send me the Newsletter weekly.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">REGISTER</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="{{ url('signin') }}"><b>Back to Login</b></a>
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
