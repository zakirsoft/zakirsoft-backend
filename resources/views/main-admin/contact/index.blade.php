@extends('layouts.app')
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
                            <a href="index.html"><i class="feather icon-home"></i></a>
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

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Default Table</h5>
                                    <span>Example of default table, Add <code>.table-de</code> class to the
                                        <code>.table</code> to create a table with default spacing. Default table all
                                        rows have <code>0.75rem</code> height.</span>
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
                                                    <th>Message</th>
                                                    <th class="text-center">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1SL</th>
                                                    <td>Khayrul Islam Shanto</td>
                                                    <td>khayrulshanto@gmail.com</td>
                                                    <td>New Project</td>
                                                    <td>lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                                                    <td class="text-center"><a href="#" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i> Remove</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1SL</th>
                                                    <td>MURSHALIN DEVAPLEX</td>
                                                    <td>MURSHALIN@gmail.com</td>
                                                    <td>New Project</td>
                                                    <td>lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                                                    <td class="text-center"><a href="#" class="btn-sm btn-danger"><i class="far fa-trash-alt"></i> Remove</a></td>
                                                </tr>
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
