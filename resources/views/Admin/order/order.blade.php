@extends('Admin.layouts.master')
@section('content-admin')
    {{--BUTTON SECTION--}}
    <div class="row mb-2">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" onclick="location.reload()">
                <i class="fa fa-sync"></i>
                Reload
            </button>
        </div>
    </div>
    {{--END OF UBTTON SECTION--}}
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
                            <th>Qty</th>
                            <th>Order</th>
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
                                    {{ $order_item->quantity }} <br/>
                                @endforeach
                            </td>
                            <td>
                            @foreach($order->order_item as $order_item)
                                - {{ $order_item->menu->name }} with {{ $order_item->side_dish->name }} <br/>
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
