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
                            <th>Date & Time</th>
                            <th>Owner</th>
                            <th>Locations</th>
                            <th>Order</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
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
                               Location:  {{$order->destionation}}<br/>
                                Street:
                            </td>
                            <td>
                            @foreach($order->order_item as $order_item)
                                - {{ $order_item->menu->name }} <br/>
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
                                @if($order->status->code == 0)
                                {{ $order->status->name }}
                                    @else

                                    <span class="text-success"> {{ $order->status->name }}</span>
                                @endif
                            </td>

                            <td>
                                @if($order->status->code == 0 )
                                <a href="#">Approve</a> |
                                <a href="#">Reject</a>
                                    @elseif($order->status->code == 1)
                                    <span class="text-success">Approved</span>
                                    @elseif($order->status->code == 2)
                                    <span class="text-warning">Approved</span>
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
