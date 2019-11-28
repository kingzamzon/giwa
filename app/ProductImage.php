<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
    	'product_id',
    	'image'
    ];

    // public function setNameAttribute($name)
    // {
    //     $this->attributes['name'] = strtolower($name);
    // }

    public function getNameAttribute($image)
    {
        return ucwords($image);
    }

    public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
