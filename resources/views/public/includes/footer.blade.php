<footer class="page-footer font-small unique-color-dark pt-4" id="footer">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Contact us!</h5>
            </li>
        </ul>
        <!-- Call to action -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright
        <a href="https://classichotelkigali.com/"> classic hotel</a>
    </div>
    <!-- Copyright -->

</footer>
{{--        CART FOR SMALL DEVICES--}}
<div class="overlay-sm appOverlay" style="visibility: hidden"></div>
<div class="cart-view-sm" id="shoppingCartList" style="visibility: hidden">
    <div class="widget-header">
        <h5 class="widget-title">Shopping cart</h5>
        <a href="#" onclick="toggleShoppingCart(); return false">close x</a>
    </div> <!-- widget-header -->
    <div class="cart-view-sm-content">
        <div class="container">
            <div id="cartItem-sm">

            </div>
        </div>
        <div class="container widget-view-footer">
            <p>
                <strong>SUBTOTAL:</strong>
                <span class="float-right" id="cartTotal-sm">
                </span>
            </p>
            <a class="btn btn-primary btn-block" href="{{ route('cart') }}">VIEW CART</a>
            <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#checkoutModal">CHECKOUT</a>
        </div>
    </div>

    </div>
</div>
{{--        END OF CART FOR SMALL DEVICES--}}
