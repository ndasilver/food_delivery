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
                @if(count($products) > 0)
                    <?php
                    $sum = 0;
                    $quantity = 0;
                    $total = 0;
                    $gTotal = 0;
                    $count = 1;
                    ?>
                    @foreach($products as $product)
                  <tr>
                    <th scope="row">{{$count++}}</th>
                    <td style="text-align: left">
                        <img src="./public_assets/images/menu-img.jpeg" class="nav-img" alt="menu-item" />
                        <span>{{ $product->name }}</span>
                    </td>
                    <td>
                        {{$product->description}}
                    </td>
                    <td>
                    @if($sessions[$product->id])
                        <input value="{{ $sessions[$product->id]['quantity'] }}" type="number" style="width: 75px; text-align: center;border: 0"/>
                            <?php
                            $quantity = $sessions[$product->id]['quantity'];
                            $total = $product->price * $sessions[$product->id]['quantity'];
                            $gTotal +=$total;
                            ?>
                        @endif
                    </td>
                    <td> {{number_format($product->price)}} </td>
                    <td>{{ number_format($product->price * $sessions[$product->id]['quantity']) }} </td>
                    <td class="cart-action">
                        <a href="#">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach
                    <tr>
                        <td colspan="5" style="text-align: left;font-weight: bold">G.Total</td>
                        <td style="font-weight: bold">{{ number_format($gTotal) }}</td>
                        <td></td>
                    </tr>
                 @else
                    <td colspan="7">
                        Cart is empty, Please add items to cart
                    </td>
                @endif
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
                @if(count($products) > 0)
                <a href="" class="btn btn-sm btn-danger btn-cart-page">
                    Clear Cart
                </a>
                @endif
            </div>
            <div class="col-md ">
                @if(count($products) > 0)
                <button type="button" class="btn btn-sm btn-success float-right btn-cart-page" data-toggle="modal" data-target="#checkoutModal">
                    Checkout
                </button>
                @endif
            </div>
        </div>
    </div>


@endsection
