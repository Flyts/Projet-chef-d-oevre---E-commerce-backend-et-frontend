<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SousCategorys extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category_slug',
        'category_id',
    ];

    public $timestamps = false;
}
