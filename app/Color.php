<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'id',
        'color_code',
        'color_name'
    ];
}
