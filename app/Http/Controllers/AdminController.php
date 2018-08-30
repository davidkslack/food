<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
    public function login()
    {
    	$data = [
    		'name' 	=> 'admin'
		];
        return view('view', $data);
    }
}