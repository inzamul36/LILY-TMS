<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $fillable = [
        'staff_name', 'staff_phone', 'staff_email', 'staff_address', 'staff_sex', 'staff_salary'
    ];

    public function orders(){
        return $this->hasMany('App\Order','staff_id');
    }
    public function staffs(){
        return $this->hasMany('App\Salary','staff_id');
    }
}
