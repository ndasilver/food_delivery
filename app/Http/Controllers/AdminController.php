<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $orders = Order::with('order_item','order_item.menu','status')
            ->orderBy('id','desc')
            ->paginate('10');
//        return $orders;
        return view('Admin.dash',compact('orders'));
    }
}
