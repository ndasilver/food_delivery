@extends('Admin.layouts.master')
@section('content-admin')
    {{--BUTTON SECTION--}}
    <div class="row mb-2">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button id="addMenuModalE" type="button" class="btn btn-primary" data-toggle="modal" data-target="addMenuModal">
                <i class="fa fa-plus"></i>
                Add menu
            </button>
        </div>
    </div>
    {{--END OF UBTTON SECTION--}}

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of Menu</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                            <td>1,500 Frw</td>
                            <td>Italian cuisine</td>
                            <td>
                                <a href="#">Edit</a>|
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                            <td>1,500 Frw</td>
                            <td>Italian cuisine</td>
                            <td>
                                <a href="#">Edit</a>|
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@include('Admin.menu.addMenuModal')
    @endsection