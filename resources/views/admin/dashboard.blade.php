@extends('layouts.app')

@section('title')
    Dashboard - ZakirSoft
@endsection

@section('dashboard')
    active
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
                    <i class="fas fa-tachometer-alt bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Dashboard</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-red">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total Profit</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">$1000</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total Orders</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">129</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Average Price</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">$7.75</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-yellow">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Product Sold</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">345</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags text-c-yellow f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From
                                        Previous Month</p>
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
