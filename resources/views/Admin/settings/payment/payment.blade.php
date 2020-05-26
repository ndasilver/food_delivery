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

                            <form method="POST" action="" accept-charset="UTF-8">
                                <div class="row">
                                    <h5 class="col-12 pb-4">
                                        <i class="fab fa-cc-stripe"></i> Stripe</h5>
                                    <!-- 'Boolean enable_facebook Field' -->
                                    <div class="form-group row col-12">
                                        <label for="enable_stripe" class="col-2 control-label text-right">Enable Stripe</label>
                                        <div class="form-group">
                                            <label class=""></label>
                                                    <input checked="checked" name="enable_stripe" type="checkbox" value="1" id="enable_stripe">
                                                <small>Check it to enable Stripe payment method</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <!-- stripe_app_id Field -->
                                    <div class="form-group">
                                        <label for="stripe_key" class="control-label">Stripe Key</label>
                                            <input class="form-control" placeholder="Stripe Key Here" name="stripe_key" type="text" value="" id="stripe_key">
                                            <div class="form-text text-muted">
                                                Insert Stripe Key
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <!-- stripe_app_secret Field -->
                                    <div class="form-group6">
                                        <label for="stripe_secret" class="control-label">Stripe Secret</label>
                                            <input class="form-control" placeholder="Stripe Secret Here" name="stripe_secret" type="text" value="" id="stripe_secret">
                                            <div class="form-text text-muted">
                                                Insert Stripe Secret
                                            </div>
                                    </div>
                                    </div>

                                    <h5 class="col-12 pb-4 custom-field-container">
                                        <i class="fab fa-cc-paypal"></i> PayPal</h5>
                                    <!-- 'Boolean enable_facebook Field' -->
                                    <div class="form-group row col-12">
                                        <label for="enable_paypal" class="col-2 control-label text-right">Enable PayPal</label>
                                        <div class="checkbox icheck">
                                            <label class="w-100 ml-2 form-check-inline">
                                                <input name="enable_paypal" type="hidden" id="enable_paypal">
                                                <div class="icheckbox_flat-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                                    <input checked="checked" name="enable_paypal" type="checkbox" value="1" id="enable_paypal"/>
                                                   </div>
                                                <span class="ml-2">Check it to enable PayPal payment method</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- 'Boolean enable_facebook Field' -->
                                    <div class="form-group row col-12">
                                        <label for="paypal_mode" class="col-2 control-label text-right">Enable Live Mode</label>
                                        <div class="checkbox icheck">
                                            <label class="w-100 ml-2 form-check-inline">
                                                <input name="paypal_mode" type="hidden" id="paypal_mode">
                                                <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                                                    <input name="paypal_mode" type="checkbox" value="1" id="paypal_mode">
                                                </div>
                                                <span class="ml-2">Check it to enable PayPal Live mode</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <!-- Paypal username-->
                                        <div class="form-group">
                                            <label for="stripe_key" class="control-label">PayPal Username</label>
                                            <input class="form-control" placeholder="PayPal Username Here" name="stripe_key" type="text" value="" id="stripe_key">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Paypay Password -->
                                        <div class="form-group6">
                                            <label for="stripe_secret" class="control-label">PayPal Password</label>
                                            <input class="form-control" placeholder="PayPal Password Here" name="stripe_secret" type="text" value="" id="stripe_secret">
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <!-- PayPal secret Field -->
                                        <div class="form-group">
                                            <label for="stripe_key" class="control-label">PayPal Secret</label>
                                            <input class="form-control" placeholder="PayPal secret Here" name="stripe_key" type="text" value="" id="stripe_key">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- paypal app id Field -->
                                        <div class="form-group6">
                                            <label for="stripe_secret" class="control-label">PayPal App id</label>
                                            <input class="form-control" placeholder="PayPal App id Here" name="stripe_secret" type="text" value="" id="stripe_secret">
                                        </div>
                                    </div>

                                    <h5 class="col-12 pb-4 custom-field-container">
                                        <i class="fas fa-money-check-alt"></i> Default Tax</h5>
                                    <!-- default_tax Field -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="stripe_key" class="control-label">Default Tax</label>
                                            <input class="form-control" placeholder="Default Tax here" name="default_tax" type="text" value="" id="">
                                        </div>
                                    </div>

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
