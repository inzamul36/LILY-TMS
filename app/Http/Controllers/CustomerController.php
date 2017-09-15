<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer/index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer(Input::all());

        if($customer->save())
        {
        	Session::flash('notice','Customer was successfully created');
            return redirect('customers');
        }
        else
        {
        	Session::flash('alert','Customer was not successfully created');
            return redirect('customers/create');
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
        $customer = Customer::find($id);
        $customer_order = Order::all()->where('order_delete','0')->where('customer_id', $id);

        $customer_order_amount = Order::all()->where('order_delete','0')->where('customer_id', $id)->sum('order_amount');
        $customer_order_paid = Order::all()->where('order_delete','0')->where('customer_id', $id)->sum('order_paid');
        $customer_order_total = Order::all()->where('order_delete','0')->where('customer_id', $id);
        return view('customer/show')->with('customer', $customer)->with('customer_order', $customer_order)->with('customer_order_amount', $customer_order_amount)->with('customer_order_paid', $customer_order_paid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer/edit')->with('customer', $customer);
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
    	$customer = Customer::find($id);
        $customer->update(Input::all());

        if($customer->save())
        {
        	Session::flash('notice','Customer was successfully updated');
        	return redirect('customers');
        }
        else
        {
        	Session::flash('alert','Customer was not successfully updated');
            return redirect('customers/edit');
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
        //
    }
}
