<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('foo', function () {
	$users=Database\Model\Food\User::all();
	foreach ($users as $user){
		echo $user->first_name;
	}
});

$router->group(['prefix' => 'admin'], function () use ($router) {

	// Menu manage
	$router->get('menu', 'Menu@index');

	// User manage
	$router->get('user', 'User@index');

	// Orders
	$router->get('order', 'Order@index');
	$router->get('order/{id}', 'Order@read');
	$router->get('completed', 'Order@completed');
});


// Login
$router->get('admin', 'Admin@index');
$router->post('admin', 'Admin@postLogin');