<?php

namespace App\Http\Controllers;

use App\Order;
use App\Staff;
use App\Customer;

use Carbon\Carbon;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
	{
		$orders = Order::all()->where('order_delete','0');
		$order_due = ($orders->sum('order_amount') - $orders->sum('order_paid'));

    	$orders_processing = Order::all()->where('order_delete','0')->where('order_status','Processing');
    	$order_processing = $orders_processing->count();

		$orders_ready = Order::all()->where('order_delete','0')->where('order_status','Ready');
		$order_ready = $orders_ready->count();

		$orders_confirm = Order::all()->where('order_delete','0')->where('order_status','Confirm');
		$order_confirm = $orders_confirm->count();

    	$orders_delivered = Order::all()->where('order_delete','0')->where('order_status','Delivered');
    	$order_delivered = $orders_delivered->count();

		$staffs = Staff::all()->where('staff_delete','0')->count();

		$order_month = Order::where('order_delete','0')->whereMonth('created_at', date('m'))->count();
    	$order_month_ready = Order::where('order_delete','0')->where('order_status','Ready')->whereMonth('created_at', date('m'))->count();
		$order_month_delivery = Order::where('order_delete','0')->where('order_status','Delivered')->whereMonth('created_at', date('m'))->count();
		$order_month_total = Order::where('order_delete','0')->whereMonth('created_at', date('m'))->sum('order_amount');
		$order_month_paid = Order::where('order_delete','0')->whereMonth('created_at', date('m'))->sum('order_paid');
		$order_month_due = $order_month_total - $order_month_paid;

    	$customers = Customer::all()->count();

  	return view('dashboard/index')->with('orders', $orders)->with('order_due', $order_due)->with('order_ready', $order_ready)->with('order_confirm', $order_confirm)->with('staffs', $staffs)->with('order_month',$order_month)->with('order_month_delivery', $order_month_delivery)->with('order_month_total', $order_month_total)->with('order_month_paid', $order_month_paid)->with('order_month_due', $order_month_due)->with('order_delivered', $order_delivered)->with('order_processing', $order_processing)->with('order_month_ready', $order_month_ready)->with('customers', $customers);
	}
}
