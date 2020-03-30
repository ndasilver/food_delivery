@extends('public.layouts.master')

@section('content')
<div class="jumbotron">
    <div class="text-center">
        <form class="form-inline mx-auto d-block">
            <div class="form-row">
                <div class="col-8">
                    <input class="form-control float-right" type="search" placeholder="Search" aria-label="Search">

                </div>

                <div class="col-4">
                    <button class="btn btn-primary btn-main-search float-left" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg text-center">
                <span class="text-center">
                    <h3 class="display-4"> All Items </h3>
                </span>
        </div>

    </div>

    <div class="row menu-items">
        <div class="col-md">
            <div class="row">
                <div class="col-4">
                    <img src="./public_assets/images/menu-img.jpeg" alt="menu-image" class="img-thumbnail menu-img">
                </div>
                <div class="col-8">
                    <div class="menu-title">
                        <h4>Classic special</h4>
                    </div>
                    <div class="menu-desc">
                        <p>Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                        </p>
                    </div>

                    <div class="">
                            <span class="price float-left">
                                <h5>Rwf 6500</h5>
                            </span>

                        <span class="add-to-cart float-right">
                                <button type="button" class="btn btn-primary btn-sm btn-add-to-cart" data-toggle="modal" data-target="#addToCartModal">
                                    <i class="fa fa-plus-circle"></i> Add to cart
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row">
                <div class="col-4">
                    <img src="./public_assets/images/menu-img.jpeg" alt="menu-image" class="img-thumbnail menu-img">
                </div>
                <div class="col-8">
                    <div class="menu-title">
                        <h4>Classic special</h4>
                    </div>
                    <div class="menu-desc">
                        <p>
                            Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                        </p>
                    </div>

                    <div class="">
                            <span class="price float-left">
                                <h5>Rwf 6500</h5>
                            </span>

                        <span class="add-to-cart float-right">
                                <button type="button" class="btn btn-primary btn-sm btn-add-to-cart" data-toggle="modal" data-target="#addToCartModal">
                                    <i class="fa fa-plus-circle"></i> Add to cart
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-md">
            <div class="row">
                <div class="col-4">
                    <img src="./public_assets/images/menu-img.jpeg" alt="menu-image" class="img-thumbnail menu-img">
                </div>
                <div class="col-8">
                    <div class="menu-title">
                        <h4>Classic special</h4>
                    </div>
                    <div class="menu-desc">
                        <p>Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                        </p>
                    </div>

                    <div class="">
                            <span class="price float-left">
                                <h5>Rwf 6500</h5>
                            </span>

                        <span class="add-to-cart float-right">
                                <button type="button" class="btn btn-primary btn-sm btn-add-to-cart" data-toggle="modal" data-target="#addToCartModal">
                                    <i class="fa fa-plus-circle"></i> Add to cart
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row">
                <div class="col-4">
                    <img src="./public_assets/images/menu-img.jpeg" alt="menu-image" class="img-thumbnail menu-img">
                </div>
                <div class="col-8">
                    <div class="menu-title">
                        <h4>Classic special</h4>
                    </div>
                    <div class="menu-desc">
                        <p>Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                        </p>
                    </div>

                    <div class="">
                            <span class="price float-left">
                                <h5>Rwf 6500</h5>
                            </span>

                        <span class="add-to-cart float-right">

                                <button type="button" class="btn btn-primary btn-sm btn-add-to-cart" data-toggle="modal" data-target="#addToCartModal">
                                    <i class="fa fa-plus-circle"></i> Add to cart
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add to cart Modal -->
<div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Classic Special</h3>
                <h5>Make a choice of accompagnment</h5>
                <p>Minimum 1 and Maximum 1</p>

                <form>
                    <ul class="side-choices">
                        <li>
                            <input type="radio" name="accomp" checked/>
                            <label>Chips</label>
                        </li>
                        <li>
                            <input type="radio" name="accomp" />
                            <label>Banana</label>
                        </li>
                        <li>
                            <input type="radio" name="accomp" />
                            <label>Rice</label>
                        </li>
                        <li>
                            <input type="radio" name="accomp" />
                            <label>Salad</label>
                        </li>
                        <li>
                            <input type="radio" name="accomp" />
                            <label>Potatoes</label>
                        </li>
                        <li>
                            <input type="radio" name="accomp" />
                            <label>Vegetables</label>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="modal-footer cart-modal-footer">
                <div class="float-left sub-total">
                    <a href="#" onclick="sub()">
                        <span class="sub-item" id="sub-item"> - </span>
                    </a>
                    <span class="items-total" id="items-total"> 1 </span>
                    <a href="#" onclick="add()">
                        <span class="add-item" id="add-item"> + </span>
                    </a>

                </div>

                <div class="float-right">
                    <button type="button" class="btn btn-success">
                        Add to cart <small class="muted">Rwf 6,500</small>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection