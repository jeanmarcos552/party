<?php

namespace App\Controllers;

use App\dao\UserDAO;
use App\Model\User;
use App\dao\EventosDAO;

class UserController
{

    public function index()
    {
        $event = new EventosDAO();
        $events = $event->getEvents();
        $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        require_once "../src/views/web/home.php";
    }

    public function getUsers()
    {
        $dao = new UserDAO();
        return $dao->listUser();
    }

    public function save()
    {
        if ($_POST['cpf'] != null && strlen($_POST['cpf']) == 14) {
            $user = new User();
            $userDao = new UserDAO();

            $user->setCpf($_POST['cpf']);
            $user->setParticipacoes($_POST['participacoes']);
            $user->setInstagram($_POST['instagram']);
            $user->setEmail($_POST['email']);

            $userDao->saveUser($user);
            $result = "200";
        }
        else {
            $result = "403";
        }

        echo $result;
    }
}