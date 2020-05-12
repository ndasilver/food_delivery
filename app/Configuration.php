<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    public function currency(){
        return $this->belongsTo('App\Currency');
    }
}
