@extends('public.layouts.master')

@section('content')
<div class="jumbotron cart-page">
    <div class="text-center">
        <h2 class="page-title">Cart</h2>
    </div>
</div>
    <div class="container">
        
        <div class = "cart">
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Order</th>
                    <th scope="col">Details</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                        <span>Classic special</span>
                    </td>
                    <td> 
                        Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                    </td>
                    <td> 2 </td>
                    <td> Rwf 6,500 </td>
                    <td>Rwf 13,000 </td>
                    <td class="cart-action">
                        <a href="#">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>
                        <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                        <span>Omlette New</span>
                    </td>
                    <td> 
                        Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                    </td>
                    <td> 1 </td>
                    <td> Rwf 5,500 </td>
                    <td>Rwf 5,000 </td>
                    <td class="cart-action">
                        <a href="#">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>
                        <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                        <span>Murfin Classic</span>
                    </td>
                    <td> 
                        Mixed rice with (stripes of beef/ fish/ chicken) served with chips, fried banana + salad
                    </td>
                    <td> 2 </td>
                    <td> Rwf 6,500 </td>
                    <td>Rwf 13,000 </td>
                    <td class="cart-action">
                        <a href="#">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
        <div class="row">
            <div class="col-md">
                <a href="{{ route('home') }}" class="btn btn-sm btn-primary btn-cart-page">
                    Continue Shopping
                </a>
            </div>
            <div class="col-md text-center">
                <a href="" class="btn btn-sm btn-danger btn-cart-page">
                    Clear Cart
                </a>
            </div>
            <div class="col-md ">
                <a href="{{ route('home') }}" class="btn btn-sm btn-success float-right btn-cart-page">
                    Checkout
                </a>
            </div>
        </div>
    </div>
@endsection