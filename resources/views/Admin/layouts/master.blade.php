{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
