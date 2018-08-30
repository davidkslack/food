<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Admin extends Controller
{

	/**
	 * @return \Illuminate\View\View
	 */
    public function index()
    {
    	$data = ['name' => 'login'];
        return view('view', $data);
    }


	/**
	 * @param Request $request
	 * @return \Illuminate\View\View
	 */
    public function postLogin(Request $request)
    {
		$email = $request->input('email');
		$pass = $request->input('pass');

    	$data = [
    		'name' 	=> 'order',
			'email' => $email
		];
        return view('view', $data);
    }
}