<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LePlusVendu extends Model
{
    protected $fillable = [
        'name_produt',
        'how_many',
        'produt_id',
        'slug',
		'price',
		'image',
    ];

    public $timestamps = false;
}
