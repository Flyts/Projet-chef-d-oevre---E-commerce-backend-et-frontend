<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherSousCategorys extends Model
{
    
    protected $fillable = [
        'name',
        'slug',
        'souscategory_slug',
        'souscategory_id',
    ];

    public $timestamps = false;
}
