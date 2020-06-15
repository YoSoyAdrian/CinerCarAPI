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

    public function classification_movies()
    {
        return $this->hasMany('App\Classification_Movie');
    }

    public function gener_movies()
    {
        return $this->belongsToMany('App\Gener_Movie');
    }


}
