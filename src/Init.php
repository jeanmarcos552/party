<?php

namespace App;


class Init
{

    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getPathUrl());
    }

    public function initRoutes()
    {
        $array['home'] = array('route' => '/', 'controller' => 'UserController', 'action' => 'index');
        $array['admin'] = array('route' => '/admin', 'controller' => 'Admin', 'action' => 'index');
        $this->setRoutes($array);
    }

    public function run($url)
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

    public function setRoutes(array $array)
    {
        $this->routes = $array;
    }

    public function getPathUrl()
    {
        return  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

