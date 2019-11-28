<?php

namespace App;

use App\User;
use App\Brand;
use App\Category;
use App\Collection;
use App\ProductImage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const SALE_ON = '1';
    const SALE_OFF = '0';

    protected $fillable = [
        'name',
    	'price',
    	'quantity',
        'sizes',
        'color',
    	'onsale',
    	'category',
    	'collection',
    	'brand',
    	'description'
    ];


    public function productimage()
    {
        return $this->hasMany(ProductImage::class);
    }

    // public function brand()
    // {
    //     return $this->belongsTo(Brand::class);
    // }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function collection()
    // {
    //     return $this->belongsTo(Collection::class);
    // }
}
