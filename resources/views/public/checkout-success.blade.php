@extends('public.layouts.master')

@section('content')
    <div class="container">

        <div class = "success-message text-center">
            <i class="fa fa-check-circle"></i>
            <h4 class="display-4 thanks">Thank you for ordering with us!</h4>
            <div class="review-section">
                <form role="form" method="POST" action="{{ route('submit.review') }}">
                    @csrf
                    <input type="hidden" name="order_id" id="order_id" value="0">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email (optional)">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="review" name="review" rows="3" placeholder="Type your review here..." required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-info pull-right" value="Submit">
                    </div>
                </form>
            </div>


            <a href="{{ route('home') }}" class="btn btn-sm btn-success btn-cart-page">
                Continue Shopping
            </a>
        </div>

    </div>


@endsection
