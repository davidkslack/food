<?php

namespace App\Http\Controllers;
use \Database\Model\Food\Order as Orders;

class Order extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$orders = Orders::where('status', '!=', 'completed')
			->orWhere('status', '=', NULL)
			->orderBy('ordered_at', 'desc')
			->with('food')
			->get();

		$data = [
			'name' 		=> 'order',
			'orders' 	=> $orders
		];
		return view('view', $data);
	}


	/**
	 * @return \Illuminate\View\View
	 */
	public function completed()
	{
		$completed = Orders::where('status', 'completed')
			->orderBy('ordered_at', 'desc')
			->with('food')
			->get();

		$data = [
			'name' 		=> 'completed',
			'completed' => $completed
		];
		return view('view', $data);
	}


	/**
	 * Complete an order by ID
	 * @param null $id
	 * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
	 */
	public function completedId($id=null)
	{
		Orders::where('order_id', $id)
			->update(['status' => 'completed']);
		return redirect('/admin/order');
	}


	/**
	 * @return \Illuminate\View\View
	 */
	public function read()
	{
		$data = ['name' => 'order-show'];
		return view('view', $data);
	}
}