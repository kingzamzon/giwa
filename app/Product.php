<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id',
    	'name',
    	'price',
    	'quantity',
    	'sizes',
    	'category_id',
    	'collection_id',
    	'brand_id',
    	'description'
    ];
}
