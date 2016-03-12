<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'Foods';

    protected $fillable = [
        'name',
        'price',
        'cal',
        'food_type_id',
        'store_id'
    ];

    public function foodType()
    {
        return $this->belongsTo('App\FoodType');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }


}
