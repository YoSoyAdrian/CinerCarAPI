<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function type_products()
    {
        return $this->hasMany('App\Type_product');
    }

   public function classification_products()
   {
       return $this->belongsToMany('App\Classification_product');
   }

   
}
