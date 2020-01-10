<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = [
        'order_id',
        'item'
    ];

    public function order()
	{
		return $this->belongsTo(Order::class)->withPivot('item');
    }
    
    protected $hidden = ['order_id','id','created_at','updated_at'];
}
