@extends('public.layouts.master')

@section('content')
    <div class="jumbotron cart-page">
        <div class="text-center">
            <h2 class="page-title">{{ $category->name }}</h2>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3 sidebar">
                @include('public.includes.sidemenu')
            </div>
            <div class="col-md-9 main-contents">
                @include('public.includes.productLayout');
            </div>
        </div>

    </div>


@endsection
