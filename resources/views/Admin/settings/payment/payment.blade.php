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
                            <h3 class="card-title">Payment</h3>
                        </div>
                        <div class="card-body p-5">

                            <form method="POST" action="{{ route('settings.payment.update') }}" accept-charset="UTF-8">
                                @csrf
                                <div class="row">
                                    <h5 class="col-12 pb-4">
                                        <i class="fab fa-cc-stripe"></i> Stripe</h5>
                                    <!-- 'Boolean enable_facebook Field' -->
                                    <div class="form-group row col-12">
                                        <label for="enable_stripe" class="col-2 control-label text-right">Enable Stripe</label>
                                        <div class="form-group">
                                            <label class=""></label>
                                            @foreach(\App\Payment::where('code','stripe')->get() as $stripe)
                                                    <input @if($stripe->is_active == 1)checked="checked" @endif name="enable_stripe" type="checkbox" id="enable_stripe">
                                            @endforeach
                                                <small>Check it to enable Stripe payment method</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <!-- stripe_app_id Field -->
                                    <div class="form-group">
                                        <label for="stripe_key" class="control-label">Stripe Key</label>
                                            <input class="form-control" placeholder="Stripe Key Here" name="stripe_key" type="text" disabled value="{{env('STRIPE_KEY')}}" id="stripe_key">
                                            <div class="form-text text-muted">
                                                Preview of the Stripe Key
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <!-- stripe_app_secret Field -->
                                    <div class="form-group6">
                                        <label for="stripe_secret" class="control-label">Stripe Secret</label>
                                            <input class="form-control" placeholder="Stripe Secret Here" name="stripe_secret" disabled type="text" value="{{env('STRIPE_SECRET')}}" id="stripe_secret">
                                            <div class="form-text text-muted">
                                                Preview of the Stripe Secret
                                            </div>
                                    </div>
                                    </div>

                                    <!-- label help here --->

                                    <div class="col-12 callout callout-warning">
                                        <h5><b>Changing stripe key and secret</b></h5>

                                        <p>Please change the stripe key and secret in .env file</p>
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
{{--                                    <div class="form-group mt-4 col-12 text-right">--}}
{{--                                        <button type="submit" class="btn btn-primary">--}}
{{--                                            <i class="fa fa-save"></i> Save Payment--}}
{{--                                        </button>--}}
{{--                                        <a href="#" class="btn btn-default"><i class="fa fa-undo"></i> Cancel</a>--}}
{{--                                    </div>--}}
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
