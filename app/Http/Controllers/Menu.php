<?php

namespace App\Http\Controllers;

class Menu extends Controller
{
	public function index()
	{
		$data = ['name' => 'menu'];
		return view('view', $data);
	}
}