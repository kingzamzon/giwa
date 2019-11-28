<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function product()
	{
		return $this->hasMany(Product::class);
	}
}
