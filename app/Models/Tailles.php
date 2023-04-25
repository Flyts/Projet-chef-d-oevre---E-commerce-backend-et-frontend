<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tailles extends Model
{
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
}
