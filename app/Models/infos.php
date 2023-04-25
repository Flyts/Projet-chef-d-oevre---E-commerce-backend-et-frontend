<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class infos extends Model
{
    protected $fillable = [
        'nom',
        'value',
        'lien',
    ];

    public $timestamps = false;
}
