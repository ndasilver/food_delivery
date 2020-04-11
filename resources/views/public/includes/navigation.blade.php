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
                    <div class="menu-text">
                        All
                    </div>
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            @foreach(\App\Category::where('isActive', 1)->take(5)->get() as $category)

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category', $category->id) }}">
                        <img src="/public_assets/images/categories/{{$category->image}}" class="nav-img" alt="Category Image here" />
                        <div class="menu-text">
                            {{$category->name}}
                        </div>
                    </a>
                </li>
            @endforeach

            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories') }}">
                    <img src="/public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                    <div class="menu-text">
                        More
                    </div>
                </a>
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
                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-primary">
                                        Go to cart
                                    </a>
                                </span>
                            <span class="float-right">
                                    <button href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#checkoutModal">
                                        Checkout
                                    </button>
                                </span>
                        </div>

            </li>

        </ul>
    </div>
</nav>
