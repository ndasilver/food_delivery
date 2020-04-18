<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'owner',
        'phone',
        'location',
        'street',
        'location_info',
        'payment_method',
        'total_price',
        'status_id',
    ];
    public function order_item(){
        return $this->hasMany('App\Order_item');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function payment(){
        return $this->belongsTo('App\Payment','payment_method');
    }
}
