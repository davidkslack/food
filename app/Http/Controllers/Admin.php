<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Database\Model\Food\User as User;

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

		$user = User::where('email', $email)->first();

		if (is_null($user)) return redirect('/admin');

		$passHash = md5($pass);
        if ($user->hash == $passHash) {
            $_SESSION["authorised"] = true;
            $_SESSION["id"] = $user->user_id;
            return redirect('/admin/order');
        }
        return redirect('/admin');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function logout()
    {
        $_SESSION["authorised"] = false;
        $_SESSION["id"] = null;
        $data = ['name' => 'login'];
        return redirect('/admin');
    }
}