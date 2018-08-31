<?php

namespace App\Http\Controllers;
use \Database\Model\Food\Food as Food;
use \Database\Model\Food\Category as Category;

class Menu extends Controller
{
	public function index()
	{
		$data = [
			'name' 		=> 'menu',
			'food' 		=> Food::all()
		];

		return view('view', $data);
	}
}