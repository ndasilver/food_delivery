@extends('Admin.layouts.master')
@section('content-admin')

    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('Admin.settings.settings_submenu')
                </div>
                <div class="col-md-9">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Users {{$id}}</h3>
                        </div>
                        <div class="card-body p-0">
                            @foreach($users as $users)
                            <form role="form" method="POST" action="{{route('users.update')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="names">Names</label>
                                        <input value="{{$id}}" name="user_id" type="hidden">
                                        <input type="text" class="form-control" name="name" id="names" value="{{$users->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" disabled class="form-control" name="email" id="exampleInputEmail1" value="{{$users->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="userRole">Role</label>
                                        <select class="form-control" name="role">
                                            @foreach(\App\Role::all() as $roles)
                                            <option @if($roles->id == $users->role_id) selected @endif value="{{$roles->id}}">{{ $roles->name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a name="password" href="#">Reset password</a>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                                @endforeach
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @include('Admin/settings/editModals')--}}
@endsection

@section('js')

@endsection
