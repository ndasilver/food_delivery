<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function configurations(){
        return $this->hasMany('App\Configuration');
    }
}
