<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function billboard()
    {
        return $this->belongsTo('App\Billboard');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function classification_movie()
    {
        return $this->belongsTo('App\Classification_movie');
    }

    public function gener_movies()
    {
        return $this->belongsToMany('App\Gener_movie');
    }
}
