<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    protected $fillable = [
        'name',
        'lien',
    ];

    public $timestamps = false;
}
