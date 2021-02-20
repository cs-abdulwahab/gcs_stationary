<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourit extends Model
{
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
