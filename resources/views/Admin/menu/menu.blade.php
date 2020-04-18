@extends('Admin.layouts.master')
@section('content-admin')
    {{--BUTTON SECTION--}}
    <div class="row mb-2">
        <div class="col-12">
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-info" onclick="addMenuModal()">
                <i class="fa fa-plus"></i>
                Add menu
            </a>
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
                <div class="card-body table-responsive p-0">
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
                        @foreach($menu as $menus)
                            <tr>
                                <td>{{ $menus->id}}</td>
                                <td>{{ $menus->name }}</td>
                                <td style="text-align: center">
                                    <img src="/public_assets/images/{{$menus->image}}" class="img-thumbnail" alt="Food Image here" style="width: 60px;height: 60px;padding: 0;margin: 0"/>
                                </td>
                                <td>{{ $menus->description }}</td>
                                <td>{{ number_format($menus->price) }}</td>
                                <td>{{ $menus->category->name }}</td>
                                <td class="actionTd">
                                    <input type="hidden" class="menuId" value="{{ $menus->id }}">
                                    <a href="#" class="editMenuModalButton">Edit</a>|
                                    <a href="#" class="deleteMenuButton">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $menu->links() }}
                </div>
            </div>

        </div>
    </div>
    @include('Admin.menu.addMenuModal')
    @include('Admin.menu.editMenuModal')
    @endsection
