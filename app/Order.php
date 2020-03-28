<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_item(){
        return $this->hasMany('Order_items');
    }
    public function order(){
        return $this->belongsTo('Order');
    }
}
