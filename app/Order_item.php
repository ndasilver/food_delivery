<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    public function order(){
        return $this->belongsTo('Order');
    }
    public function menu(){
        return $this->hasMany('menu');
    }
}
