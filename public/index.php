<?php

/* if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
*/
require_once __DIR__ . "/../src/utils/config.php";

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

$route->get('/login', 'App\Controllers\LoginController@index');

$route->end();