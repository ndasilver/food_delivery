<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="checkout-form" id="orderCheckoutForm" method="post" action="{{ route('checkout.Cart') }}">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Checkout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        {{ csrf_field()}}
                        <input type="hidden" id="" name=""/>
                        <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="fname">Names</label>
                            <input type="text" class="form-control" id="orderFname" name="owner" placeholder="Names" required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Contact</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="location" placeholder="Street Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="near">Other location info</label>
                            <input type="text" class="form-control" id="orderLocationInfo" name="location_info" placeholder="Near...">
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="change"><strong>Payment Option</strong></label>
                        <br/>
                        @foreach($payment_method as $payment_method)
                            @if($payment_method->is_active == 1)
                        <input type="radio" name="payment_method" id="{{ $payment_method->code }}" value="{{ $payment_method->id }}"/>
                        <label for="{{ $payment_method->code }}">{{ $payment_method->name }}</label>
                            @endif
                        @endforeach
                    </div>
                    <div class="form-group stripe-payment-section">
                        <label for="card-element">Credit or debit card</label>
                        <input class="form-control" id="card-holder-name" type="text" placeholder="Card Holder Name">
                        <!-- Stripe Elements Placeholder -->
                        <div id="card-element"></div>
                        <!-- Used to display Element errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <div class="form-group" id="change-box" style="display: none;">
                        <label for="change">Please type in below how much you need change for.</label>
                        <input type="text" class="form-control" id="OrderChange" name="change" placeholder="Eg: Rwf 2000">
                    </div>
                </div><!-- modal body -->
                <div class="modal-footer">
                    <div class = "terms-cond float-left">
                        <p>I have read and understood <a href="#">the terms and conditions.</a></p>
                        <div>
                            <label>I agree </label>
                            <input type="checkbox" name="agree" id="agree"/>
                            <br>
                        </div>
                    </div>
                    <button id="card-button" class="btn btn-primary">
                        Checkout
                    </button>
                </div>
        </div>
</form>
{{--        form-close-here--}}
    </div>
</div>
