<?php

namespace App;

use App\Order;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'country',
        'firstName',
        'lastName',
        'lagRegion',
        'address',
        'state',
        'zipcode',
        'email',
        'phone',
        'orderNote',
        'alternateAddress'
    ];

    public function order()
	{
		return $this->hasMany(Order::class);
    }

    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
