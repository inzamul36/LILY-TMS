<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
        'customer_id', 'staff_id', 'delivery_date', 'order_amount', 'order_paid', 'order_details', 'order_status'
    ];

    public function customer()
	{
	    return $this->belongsTo('App\Customer');
	}
	public function staff()
	{
	    return $this->belongsTo('App\Staff');
	}
	public function measurement()
	{
	    return $this->hasOne('App\Measurement','order_id');
	}
}
