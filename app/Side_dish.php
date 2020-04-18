<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Side_dish extends Model
{
    public function order_item(){
        return $this->hasOne('App\Order_item');
    }
}
