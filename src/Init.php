<?php

namespace App;

use Route\Init\Bootstrap;

class Init extends Bootstrap
{
    public function initRoutes()
    {
        $array['home'] = array('route' => '/', 'controller' => 'UserController', 'action' => 'index');
        $array['admin'] = array('route' => '/admin', 'controller' => 'Admin', 'action' => 'index');
        $this->setRoutes($array);
    }
}

