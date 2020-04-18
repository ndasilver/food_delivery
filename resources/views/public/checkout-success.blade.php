@extends('public.layouts.master')

@section('content')
    <div class="container">

        <div class = "success-message text-center">
            <i class="fa fa-check-circle"></i>
            <h4 class="display-4 thanks">Thank you for ordering with us!</h4>

            <a href="{{ route('home') }}" class="btn btn-sm btn-success btn-cart-page">
                Continue Shopping
            </a>
        </div>

    </div>


@endsection
