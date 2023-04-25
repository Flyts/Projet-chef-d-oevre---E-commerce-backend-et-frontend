<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'nom',
        'email',
        'sujet',
        'message',
        'user_id',
    ];

    public $timestamps = false;
}
