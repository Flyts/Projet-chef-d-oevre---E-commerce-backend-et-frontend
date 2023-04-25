<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchRequestFavorite extends Model
{
    protected $fillable = [
        'name_search',
        'how_many',
        'user_id',
    ];

    public $timestamps = false;
}
