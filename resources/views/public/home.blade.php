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


@include('public.includes.productLayout');


</div>



@endsection
