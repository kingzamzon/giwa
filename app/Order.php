<?php

namespace App;

use App\Customer;
use App\OrderDetails;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'coupon_code',
        'delivery_fee',
        'reference',
        'total_cost',
        'is_paid',
        'order_type',
        'is_delivered'
    ];
    
    public function customer()
	{
		return $this->belongsTo(Customer::class);
    }
    public function orderdetails()
	{
		return $this->hasMany(OrderDetails::class);
    }
}
