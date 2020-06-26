<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model

{
    protected $fillable = ['name', 'description', 'price', 'type_product_id', 'active'];
    protected $guarded = ['id'];
    public function type_product()
    {
        return $this->belongsTo('App\Type_product');
    }

    public function classification_products()
    {
        return $this->belongsToMany('App\Classification_product');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
