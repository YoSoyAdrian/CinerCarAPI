<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification_movie extends Model
{
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
