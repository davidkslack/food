<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin', ['name' => 'Test']);
    }
}