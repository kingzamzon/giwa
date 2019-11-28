<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    	'user_id',
    	'reference',
    	'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
