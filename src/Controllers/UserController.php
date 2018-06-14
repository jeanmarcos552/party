<?php

namespace App\Controllers;

use App\dao\UserDAO;
use App\Model\User;

class UserController
{

    public function index()
    {
        $login_url = 'https://api.instagram.com/oauth/authorize/?client_id=' . INSTAGRAM_CLIENT_ID . '&redirect_uri=' . urlencode(INSTAGRAM_REDIRECT_URI) . '&response_type=code&scope=basic';
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