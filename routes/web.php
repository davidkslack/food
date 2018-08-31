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

$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function () use ($router) {

	// Menu manage
	$router->get('menu', 'Menu@index');

	// User manage
	$router->get('user', 'User@index');

	// Orders
	$router->get('order', 'Order@index');
	$router->get('order/{id}', 'Order@read');
	$router->get('completed', 'Order@completed');
	$router->get('complete/{id}', 'Order@completedId');

    $router->get('logout', 'Admin@logout');
});


// Login
$router->get('admin', 'Admin@index');
$router->post('admin', 'Admin@postLogin');

$router->group(['prefix' => 'api'], function () use ($router) {
    // Orders
    $router->get('orders', 'ApiOrder@showAllOrders');
    $router->get('orders/{id}', 'ApiOrder@showOneOrder');
    $router->post('orders', 'ApiOrder@create');
});