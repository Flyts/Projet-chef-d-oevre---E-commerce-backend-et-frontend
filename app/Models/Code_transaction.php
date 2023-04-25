<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code_transaction extends Model
{
    protected $fillable = [
        'statut',
    ];

    public $timestamps = false;
}
