<?php
/**
 * Created by PhpStorm.
 * User: jeanmarcos
 * Date: 01/06/2018
 * Time: 16:32
 */

namespace Route\Init;


abstract class Bootstrap
{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getPathUrl());
    }

    protected abstract function initRoutes();

    protected function run($url)
    {
        array_walk($this->routes, function ($route) use ($url){
            if ($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class();
                $method = $route['action'];
                $controller->$method();
            }
        });
    }

    protected function setRoutes(array $array)
    {
        $this->routes = $array;
    }

    protected function getPathUrl()
    {
        return  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}