<?php

namespace App\Http\Controllers;
use \Database\Model\Food\Food as Food;

class Menu extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$food = Food::orderBy('title')->get();
		$data = [
			'name' 		=> 'menu',
			'food' 		=> $food
		];

		return view('view', $data);
	}
}