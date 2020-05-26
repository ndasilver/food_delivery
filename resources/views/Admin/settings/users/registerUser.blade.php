@extends('Admin.layouts.master')
@section('content-admin')

    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('Admin.settings.settings_submenu')
                </div>
                <div class="col-md-9">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show" role="alert">{{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </p>
                        @endforeach
                    @endif
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Register User</h3>
                        </div>
                        <div class="card-body p-0">
                            <form action="{{route('user.create')}}" method="post" class="m-5">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control " value="" placeholder="Full name" autofocus="">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control " value="" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control " placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password_confirmation" class="form-control " placeholder="Retype password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    Register
                                </button>
                            </form>
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
