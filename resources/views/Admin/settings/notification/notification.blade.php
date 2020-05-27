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
                            <h3 class="card-title">Order Notification</h3>
                        </div>
                        <div class="card-body p-5">

                            <form method="POST" action="{{ route('settings.notification.update') }}" accept-charset="UTF-8">
                                @csrf
                                <div class="row">
                                    <h5 class="col-12 pb-4">
                                        <i class="fa fa-bell"></i> Notification</h5>

                                    <div class="col-6">
                                    <!-- stripe_app_id Field -->
                                    <div class="form-group">
                                        <label for="stripe_key" class="control-label">Pusher App ID</label>
                                            <input class="form-control" name="" type="text" disabled value="{{env('PUSHER_APP_ID')}}" id="">
                                            <div class="form-text text-muted">
                                                Preview of the Pusher App ID
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <!-- stripe_app_secret Field -->
                                    <div class="form-group6">
                                        <label for="stripe_secret" class="control-label">Pusher App Key</label>
                                            <input class="form-control" disabled type="text" value="{{env('PUSHER_APP_KEY')}}">
                                            <div class="form-text text-muted">
                                                Preview of the Pusher App Key
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group6">
                                            <label for="stripe_secret" class="control-label">Pusher App Secret</label>
                                            <input class="form-control" disabled type="text" value="{{env('PUSHER_APP_SECRET')}}">
                                            <div class="form-text text-muted">
                                                Preview of the Pusher App Secret
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group6">
                                            <label for="stripe_secret" class="control-label">Pusher App Cluster</label>
                                            <input class="form-control" disabled type="text" value="{{env('PUSHER_APP_CLUSTER')}}">
                                            <div class="form-text text-muted">
                                                Preview of the Pusher App Cluster
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <!-- label help here --->

                                    <div class="callout callout-warning">
                                        <h5>Changing Pusher App ID, Key, Secret and Cluster</h5>

                                        <p>Please change the Pusher App ID, Key, Secret and Cluster in .env file</p>
                                    </div>



{{--                                    <h5 class="col-12 pb-4 custom-field-container">--}}
{{--                                        <i class="fas fa-money-check-alt"></i> Default Tax</h5>--}}
{{--                                    <!-- default_tax Field -->--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stripe_key" class="control-label">Default Tax</label>--}}
{{--                                            <input class="form-control" placeholder="Default Tax here" name="default_tax" type="text" value="" id="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <!-- Submit Field -->
                                    <div class="form-group mt-4 col-12 text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i> Save Payment
                                        </button>
                                        <a href="#" class="btn btn-default"><i class="fa fa-undo"></i> Cancel</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
