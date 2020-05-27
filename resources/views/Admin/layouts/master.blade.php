{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$page_title ?? '' }}</h1>

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has($msg))
            <div class="alert alert-{{ $msg }} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4> Alert!</h4>
                {{ Session::get($msg) }}
            </div>
        @endif
    @endforeach
@stop

@section('content')
    @yield('content-admin')
    @include('Admin.notification.notification')
@stop
@section('css')
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="/js/adminScript.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@stop
