<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
	protected $fillable = [
        'order_id', 'neck', 'chest', 'shoulder', 'waist', 'hips', 'sleeve', 'bicep', 'wrist', 'length', 'thigh', 'crotch', 'ankles', 'inseam', 'outseam', 'other_measurements'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}
