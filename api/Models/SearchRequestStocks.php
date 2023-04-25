<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SearchRequestStocks extends Model
{
    protected $fillable = [
        'name_search',
        'how_many',
    ];

    public $timestamps = false;
}
