<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gener_movie extends Model
{
    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }
}
