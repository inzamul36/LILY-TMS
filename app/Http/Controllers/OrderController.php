<?php

namespace App\Http\Controllers;

use App\Order;
use App\Staff;
use App\Customer;
use App\Measurement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all()->where('order_delete','0');
        return view('order/index')->with( 'orders', $orders );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$customer = Customer::all()->pluck('customer_name','id');
        $staff = Staff::where('staff_delete','0')->pluck('staff_name','id');
        return view('order/create')->with('staff', $staff)->with('customer', $customer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order(Input::all());

        if($order->save())
        {
            $measurement = new Measurement;
            $measurement->order_id = $order->id;
            $measurement->save();
            Session::flash('notice','Order was successfully Created');
            return redirect()->route('measurements.edit', $order->id);
        }
        else
        {
            Session::flash('alert','Order was not successfully Created');
            return redirect('orders/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order/show')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::all()->pluck('customer_name','id');
        $staff = Staff::where('staff_delete','0')->pluck('staff_name','id');
        $order = Order::find($id);
        return view('order/edit')->with('staff', $staff)->with('customer', $customer)->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update(Input::all());

        if($order->save())
        {
            Session::flash('notice','Order was successfully updated');
            return redirect('orders');
        }
        else
        {
            Session::flash('alert','Order was not successfully updated');
            return redirect('orders/create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->order_delete ='1';
        
        if ($order->save())
        {
            return redirect('orders');
        } 
    }


    //UPDATE Password
    public function password(){
        return View('order/password');
    }

    public function updatePassword(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'Current password is required',
            'password.required' => 'New password is required',
            'password.confirmed' => 'Passwords do not match',
            'password.min' => 'Password is too short (minimum is 6 characters)',
            'password.max' => 'Password is too long (maximum is 18 characters)',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('password')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('/')->with('notice', 'Password changed successfully')->with('m-class','alert-success');
            }
            else
            {
                return redirect('password')->with('alert', 'Current password is invalid')->with('m-class','alert-danger');
            }
        }
    }
}
