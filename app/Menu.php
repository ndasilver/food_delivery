<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function order_items(){
        return $this->belongsTo('Order_items');
    }
}
