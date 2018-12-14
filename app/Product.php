<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'quantity'];

    public function categories()
    {
        $this->belongsToMany('App\Category');
    }
}
