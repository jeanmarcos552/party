<?php

namespace App\Controllers;

use App\dao\UserDAO;
use App\Model\User;

class UserController
{

    public function index()
    {
        session_start();
        $daoCtrl = new UserDAO();
        $loginCtrl = new LoginController();

        $login_url = 'https://api.instagram.com/oauth/authorize/?client_id=' . INSTAGRAM_CLIENT_ID . '&redirect_uri=' . urlencode(INSTAGRAM_REDIRECT_URI) . '&response_type=code&scope=relationships';
        $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $loginCtrl->login();
        //$user = $dao->listUser();

        require_once "../src/views/web/home.php";
    }

    /**
    * List dado of User
    */
    public function getUsers()
    {
        $dao = new UserDAO();
        $users = $dao->listUser();
        require_once "../src/views/admin/dashboard.php";
    }

    /**
     * Save dado after Login
     */
    public function save()
    {

        if ($_POST['cpf'] != null && strlen($_POST['cpf']) == 14) {
            $user = new User();
            $userDao = new UserDAO();

            $user->setCpf($_POST['cpf']);
            $user->setIndicatedInstagram($_POST['instagram']);
            $user->setEmail($_POST['email']);
            $user->setIdInstagramHash($_COOKIE['user']);

            $userDao->updateUser($user);

            $result = "200";
        }
        else {
            $result = "403";
        }

        echo $result;
    }


    public function getUserLogged($id)
    {

    }
}