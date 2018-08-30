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

$router->get('admin', 'Admin@index');
$router->post('admin', 'Admin@postLogin');
$router->get('menu', 'Menu@index');
$router->get('user', 'User@index');
$router->get('order', 'Order@index');
