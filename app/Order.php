<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderItems(){
        return $this->hasOne('App\OrderItem');
    }
     public function customer(){
        return $this->belongsTo('App\CustomerDetail');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    //optional
    public function renteruser()
    {
        return $this->belongsTo('App\User','created_by');
    }
   
}
