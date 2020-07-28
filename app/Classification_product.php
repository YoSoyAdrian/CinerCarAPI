<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification_product extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
