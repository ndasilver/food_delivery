<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_item(){
        return $this->hasMany('App\Order_item');
    }
    public function status(){
        return $this->hasOne('App\Status');
    }
}
