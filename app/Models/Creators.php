<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creators extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'royalty_avenues' => 'array',
        'type_funding' => 'array'
    ];
}
