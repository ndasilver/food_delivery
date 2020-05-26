@extends('Admin.layouts.master')
@section('content-admin')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">{{ \App\User::all()->count() }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-bag "></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Orders</span>
                    <span class="info-box-number">
                  {{ \App\Order::all()->count() }}
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Products</span>
                    <span class="info-box-number">
                        {{ \App\Menu::all()->count() }}
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Sales</span>
                    <span class="info-box-number"> {{ \App\Configuration::find(1)->currency->currency_code }} {{ number_format(\App\Order::all()->sum('total_price')) }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="content-header">
        <div class="container-fluid">
            <h2>New Orders</h2>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 100px">Date & Time</th>
                            <th>Owner</th>
                            <th>Locations</th>
                            <th>Order</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total<br/>({{ \App\Configuration::find(1)->currency->currency_code }})</th>
                            <th>Payment<br/> method</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody style="font-size: 14px">
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{ $order->id }}
                                </td>
                                <td>{{$order->created_at }}
                                </td>
                                <td>
                                    Names:{{ $order->owner }} <br/>
                                    Phone: {{$order->phone}}

                                    {{--                                <span class="badge bg-danger">NEW</span>--}}
                                </td>
                                <td>
                                    Location:  {{$order->location}}<br/>
                                    More info: {{$order->location_info}}
                                </td>
                                <td>
                                    @foreach($order->order_item as $order_item)
                                        - {{ $order_item->menu->name }} with {{ $order_item->side_dish->name }} <br/>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($order->order_item as $order_item)
                                        {{ $order_item->quantity }} <br/>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($order->order_item as $order_item)
                                        {{ number_format($order_item->price) }} <br/>
                                    @endforeach
                                </td>
                                <td>
                                    {{ number_format($order->total_price) }}
                                </td>
                                <td>
                                    {{ $order->payment->name }}
                                </td>
                                <td>
                                    @if($order->status->code == 0)
                                        {{ $order->status->name }}
                                    @endif

                                    @if($order->status->code == 1)

                                        <span class="text-success"> {{ $order->status->name }}</span>
                                    @endif
                                    @if($order->status->code == 2)

                                        <span class="text-danger"> {{ $order->status->name }}</span>
                                    @endif
                                </td>

                                <td>
                                    @if($order->status->code == 0 )
                                        <a href="#" onclick="approveOrder({{$order->id}})">Approve</a> |
                                        <a href="#" onclick="rejectOrder({{$order->id}})">Reject</a>
                                    @elseif($order->status->code == 1)
                                        <span class="text-success">Approved</span>
                                    @elseif($order->status->code == 2)
                                        <span class="text-danger">Approved</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
