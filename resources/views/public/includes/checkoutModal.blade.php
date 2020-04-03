<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form class="checkout-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Checkout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Street Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="near">Near</label>
                            <input type="text" class="form-control" id="near" name="near" placeholder="Near...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Phone Number">
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="change"><strong>Payment Option</strong></label>
                        <br/>
                        <input type="radio" name="payment" id="momo" checked/>
                        <label>Mobile Money</label>
                        <input type="radio" name="payment" id="cash"/>
                        <label>Cash on Delivery</label>
                    </div>

                    <div class="form-group" id="change-box" style="display: none;">
                        <label for="change">Please type in below how much you need change for.</label>
                        <input type="text" class="form-control" id="change" name="change" placeholder="Eg: Rwf 2000">
                    </div>

                </div>
                <div class="modal-footer">
                    <div class = "terms-cond float-left">
                        <p>I have read and understood <a href="#">the terms and conditions.</a></p>
                        <div>
                            <label>I agree </label>
                            <input type="checkbox" name="agree" id="agree"/>
                            <br>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary" id="btn-checkout" disabled>Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>
