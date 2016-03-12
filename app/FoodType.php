<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = 'Food_Types';

    protected $fillable = [
        'food_type_name'
    ];

    public function foods()
    {
        $this->hasMany('App\Food');
    }

}
