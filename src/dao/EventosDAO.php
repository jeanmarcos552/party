<?php
/**
 * Created by PhpStorm.
 * User: jeanmarcos
 * Date: 06/06/2018
 * Time: 20:56
 */

namespace App\dao;


class EventosDAO
{

    public function getEvents()
    {
        return $events = array(
            "2010" => "2010.jpg",
            "2012" => "2012.jpg",
            "2014" => "2014.jpg",
            "2015" => "2015.jpg",
            "2016" => "2016.jpg"
        );
    }
}