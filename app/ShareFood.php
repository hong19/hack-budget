<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareFood extends Model
{
    protected $table = 'Share_Foods';

    protected $fillable = [
        'user_name',
        'personal_price',
        'max_person',
        'current_person',
        'address'
    ];
}
