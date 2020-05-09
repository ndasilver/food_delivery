@extends('public.layouts.master')

@section('content')
    <div class="container">

        <div class = "success-message text-center">
            <i class="fa fa-star"></i>
            <h4 class="display-4 thanks">Your review has been well received!</h4>

            <a href="{{ route('home') }}" class="btn btn-sm btn-success btn-cart-page">
                Continue Shopping
            </a>
        </div>

    </div>


@endsection
