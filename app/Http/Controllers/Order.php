<?php

namespace App\Http\Controllers;

class Order extends Controller
{
	public function index()
	{
		$data = ['name' => 'order'];
		return view('view', $data);
	}
}