<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
  public function order(){         
    return $this->belongsTo('App\Order');   
}
      public function item(){
        return $this->belongsTo(Product::class);
      }
    
}
