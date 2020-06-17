<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification_movie extends Model
{
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
