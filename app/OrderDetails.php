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
		return $this->belongsTo(Order::class);
	}
}
