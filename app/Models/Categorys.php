<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    public function products()
    {
    	return $this->$this->belongsToMany('App\Products');
    }
}
