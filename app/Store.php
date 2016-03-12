<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'Stores';

    protected $fillable = [
        'store_name',
        'address',
        'phone',
        'longitude',
        'latitude'
    ];

    public function foods()
    {
        $this->hasMany('App\Food');
    }

}
