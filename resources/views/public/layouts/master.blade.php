<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- main custom css -->
    <link rel="stylesheet" href="/public_assets/css/main.css" />

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Classic Food Delivery</title>
</head>

<body>

<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
    <a href="/" class="navbar-brand d-flex mr-auto" style="width: 34%!important;">
        <img src="/public_assets/images/cp logo.png" width="50" height="50" class="d-inline-block align-top" alt="Top-logo">
        <span class="brand-name"> Classic Hotel </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav w-100 justify-content-center text-center">
            <li class="nav-item active">

                <a class="nav-link" href="{{ route('home') }}">
                <img src="/public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                All <span class="sr-only">(current)</span>
                </a>
            </li>
            @foreach(\App\Category::take(5)->get() as $category)

            <li class="nav-item">

                <a class="nav-link" href="{{ route('category', $category->id) }}">
                <img src="/public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                {{$category->name}}
                </a>
            </li>
            @endforeach

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
                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-primary">
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
<!-- Page content goes here -->
@yield('content')

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
