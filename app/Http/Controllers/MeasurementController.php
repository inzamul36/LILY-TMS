<?php

namespace App\Http\Controllers;

use App\Measurement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class MeasurementController extends Controller
{
    public function edit($id)
    {
    	$measurement = Measurement::where('order_id', $id)->first();
    	return view('measurement/edit')->with('measurement', $measurement);
    }
    public function update(Request $request, $id)
    {
    	$measurement = Measurement::find($id);
        $measurement->update(Input::all());

        if($measurement->save())
        {
            Session::flash('notice','Measurement was successfully updated');
            return redirect('orders');
        }
        else
        {
            Session::flash('alert','Measurement was not successfully updated');
            return redirect('orders/create');
        }
    }
}
