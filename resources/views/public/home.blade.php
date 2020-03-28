<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- main custom css -->
    <link rel="stylesheet" href="./public_assets/css/main.css" />

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Classic Food Delivery</title>
</head>

<body>

<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
    <a href="/" class="navbar-brand d-flex w-50 mr-auto">
        <img src="./public_assets/images/cp logo.png" width="50" height="50" class="d-inline-block align-top" alt="Top-logo"> Classic Hotel
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item active">
                <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                <a class="nav-link" href="#">All <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                <a class="nav-link" href="#">Main Menu</a>
            </li>
            <li class="nav-item">
                <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                <a class="nav-link" href="#">Special Order</a>
            </li>
            <li class="nav-item">
                <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                <a class="nav-link" href="#">Drinks</a>
            </li>
            <li class="nav-item">
                <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                <a class="nav-link" href="#">Foreign Menu</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item dropdown">
                <a href="#" class="btn btn-success my-2 my-sm-0 btn-cart-top" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    (3)<i class="fa fa-shopping-cart top-nav"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <div class="dropdown-cart-items">
                        <div>2x Classic Special = <span class="red-text">Rwf 6500</span></div>
                        <div class="dropdown-divider"></div>
                        <div>2x Classic Special = <span class="red-text">Rwf 6500</span></div>
                        <div class="dropdown-divider"></div>
                        <div>2x Classic Special = <span class="red-text">Rwf 6500</span></div>
                        <div class="dropdown-divider"></div>
                        <div>
                                <span class="float-left">
                                    <a href="#" class="btn btn-sm btn-primary">
                                        Go to cart
                                    </a>
                                </span>
                            <span class="float-right">
                                    <a href="#" class="btn btn-sm btn-success">
                                        Checkout
                                    </a>
                                </span>
                        </div>
            </li>

        </ul>
    </div>
</nav>


<div class="jumbotron">
    <div class="text-center">
        <form class="form-inline mx-auto d-block">
            <div class="form-row">
                <div class="col-8">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                </div>

                <div class="col-4">
                    <button class="btn btn-primary btn-main-search" type="submit">Search</button>
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
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

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
<!-- Footer -->



<!--Jquery scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Custom scripts -->
<script src="./public_assets/js/scripts.js"></script>


</body>

</html>
