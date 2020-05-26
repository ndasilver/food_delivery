<div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 id="menu-name">Classic Special</h3>
                <h5>Make a choice of accompaignment</h5>
                <p>Minimum 1 and Maximum 1</p>

                <form>
                    <ul class="side-choices">
                        @foreach($side_dish as $side_dishes)
                        <li>
                            <input type="radio" id="" name="accomp" value="{{ $side_dishes->id }}"/>
                            <label>{{$side_dishes->name}}</label>
                        </li>
                        @endforeach
                    </ul>
                </form>
            </div>
            <div class="modal-footer cart-modal-footer">
                <div class="float-left sub-total">
                    <input id="initial-price" type="hidden"/>
                    <a onclick="sub()">
                        <span class="sub-item" id="sub-item"> - </span>
                    </a>
                    <span class="items-total" id="items-total"> 1 </span>
                    <a onclick="add()">
                        <span class="add-item" id="add-item"> + </span>
                    </a>

                </div>

                <div class="float-right">
                    <button type="button" class="btn btn-success" id="addItemToCart" onclick="addToCart()">
                        <input type="text" id="clickedItemId" value="" hidden>
                        Add to cart <small class="muted">{{ \App\Configuration::find(1)->currency->currency_code }} <span id="cart-price"></span></small>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
