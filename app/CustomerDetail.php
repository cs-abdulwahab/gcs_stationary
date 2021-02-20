<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    public function order(){
        return $this->hasMany('App\Order');
    }
}
