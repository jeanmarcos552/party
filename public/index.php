<?php

define('DS', DIRECTORY_SEPARATOR, true);
define('BASE_PATH', __DIR__ . DS, TRUE);

require BASE_PATH.'/../vendor/autoload.php';

$app		= System\App::instance();
$app->request  	= System\Request::instance();
$app->route	= System\Route::instance($app->request);

$route = $app->route;

$route->get('/', 'App\Controllers\UserController@index');
$route->get('/admin', 'App\Controllers\AdminController@index');

$route->post('/api/v1/save', 'App\Controllers\UserController@save');

$route->end();