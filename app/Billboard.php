<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    public function location()
    {
        return $this->belongsTo('App\location');
    }

   public function movies()
   {
       return $this->hasMany('App\Movie');
   }
}
