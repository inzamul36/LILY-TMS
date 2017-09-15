<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name', 'customer_phone', 'customer_email', 'customer_address', 'customer_sex'
    ];
    
	public function orders()
	{
	    return $this->hasMany('App\Order','customer_id');
	}
}
