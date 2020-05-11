<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = [
        "menu_id",
        "order_id",
        "side_dish_id",
        "price",
        "quantity",
        "sub_total"
    ];
    public function order(){
        return $this->belongsToMany('App\Order');
    }
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
    public function side_dish(){
        return $this->belongsTo('App\Side_dish');
    }
}
