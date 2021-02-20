<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    
    protected $fillable = ['product_id'];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
