<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
  protected $fillable = ['category_id'];
  
    public function user()
    {
        return $this->belongsTo('App\User','created_by');
    }
    public function category() {
        return $this->belongsTo('App\Category');
      }
      public function orderItems(){
        return $this->hasMany(OrderItem::class);
      }
      public function review()
      {
      return $this->hasMany('App\Review','product_id');
      }
      public function favorite(){
        return $this->hasMany('App\Favourit','product_id');
      }
}

