<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
