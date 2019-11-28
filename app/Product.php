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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productimage()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
