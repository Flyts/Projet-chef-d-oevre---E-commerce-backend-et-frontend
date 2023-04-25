<?php

namespace App\Models;

use App\Models\Favoris;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    protected $fillable = [
        'titre',
        'slug',
        'subtitle',
        'description',
        'price',
        'image',
        'user_id',
        'product_id',
    ];

}
