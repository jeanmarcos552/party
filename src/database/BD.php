<?php
/**
 * Created by PhpStorm.
 * User: jeanmarcos
 * Date: 28/05/2018
 * Time: 22:04
 */

namespace App\database;


class BD
{
    public static $instance;

    public static function getConnection()
    {
        try{
            self::$instance = new \PDO("mysql:host=localhost:3306;dbname=php", "root", "root");
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        }catch (\Exception $e){

            echo $e->getMessage();
        }

        return self::$instance;
    }
}