@extends('Admin.layouts.master')
@section('content-admin')

    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('Admin.settings.settings_submenu')
                </div>
                <div class="col-md-9">
                    <div class="row mb-2">
                        <div class="col-12">
                            <a class="btn btn-info" href="{{route('register')}}"><i class="fa fa-plus"></i> Create User</a>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Users</h3>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email }}</td>
                                    <td>{{$user->role->name }}</td>
                                    <td>
                                        @if($user->is_active)
                                        <a class="btn btn-sm btn-danger" href="{{route('user.deactivate',$user->id)}}">
                                            <i class="fas fa-times"></i> Disable
                                        </a>
                                            @else
                                            <a class="btn btn-sm btn-success" href="{{route('user.activate',$user->id)}}">
                                                <i class="fas fa-check"></i> Enable
                                            </a>
                                                @endif
                                        <a class="btn btn-sm btn-info" href="{{route('users.edit',$user->id)}}">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Admin/settings/editModals')
@endsection

@section('js')

@endsection
