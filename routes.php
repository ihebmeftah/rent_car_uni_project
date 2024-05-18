<?php


$router->get('/', 'GestController@index');
$router->post('/delete', 'GestController@delete');

$router->get('/add', 'GestController@add');
$router->post('/add', 'GestController@addgest');

$router->get('/register', 'AuthController@register');
$router->post('/register', 'AuthController@performRegister');

$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@performLogin');

$router->get('/logout', 'AuthController@logout');
$router->post('/logout', 'AuthController@logout');
