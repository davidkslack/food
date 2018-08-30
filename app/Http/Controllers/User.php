<?php

namespace App\Http\Controllers;

class User extends Controller
{
	public function index()
	{
		$data = ['name' => 'user'];
		return view('view', $data);
	}
}