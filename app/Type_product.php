<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
