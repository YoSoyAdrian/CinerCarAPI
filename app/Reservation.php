<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function billboards()
    {
        return $this->hasMany('App\Billboard');
    }


   public function tickets()
   {
       return $this->belongsToMany('App\Ticket');
   }
}
