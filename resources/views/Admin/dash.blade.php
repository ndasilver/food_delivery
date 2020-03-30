@extends('Admin.layouts.master')
@section('content-admin')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">4</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-bag "></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Orders</span>
                    <span class="info-box-number">
                  10
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Products</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="content-header">
        <div class="container-fluid">
            <h2>New Orders</h2>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date & Time</th>
                            <th>Owner</th>
                            <th>Phone</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Approved</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                2020/06/16
                            </td>
                            <td>
                                Ayman Mugabo
                                <span class="badge bg-danger">NEW</span>
                            </td>
                            <td>0788708212</td>
                            <td>13</td>
                            <td>
                                12,000 Rwf
                            </td>
                            <td>
                                <a href="#" class="">
                                    <i class="text-danger fas fa-times"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#">Approve</a> |
                                <a href="#">Reject</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                2020/06/16
                            </td>
                            <td>
                                Sylver mugabo
                            </td>
                            <td>0788708212</td>
                            <td>29</td>
                            <td>
                                23,234 Rwf
                            </td>
                            <td>
                                <a href="#" class="">
                                    <i class="text-success fas fa-check"></i>
                                </a>
                            </td>
                            <td>
                                <span class="text-success">Approved</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection