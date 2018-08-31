<?php

namespace App\Http\Controllers;
use \Database\Model\Food\User as Users;

class User extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$users = Users::orderBy('email')->get();
		$data = [
			'name' => 'user',
			'users' => $users
		];
		return view('view', $data);
	}
}