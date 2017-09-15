<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
	protected $fillable = [
        'staff_id', 'salary_date', 'salary_month', 'salary_paid'
    ];

    public function staff(){
        return $this->belongsTo('App\Staff');
    }
}
