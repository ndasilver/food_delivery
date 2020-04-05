<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'names', 'contact', 'address', 'near', 'orders', 'class'
    ];
}
