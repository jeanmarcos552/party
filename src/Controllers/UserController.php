<?php

namespace App\Controllers;

use App\dao\UserDAO;
use App\Model\User;

class UserController
{

    public function index()
    {
        echo "Ola";
    }

    public function getUsers()
    {
        $dao = new UserDAO();
        return $dao->listUser();
    }

    public function save()
    {
        $user = new User();
        $userDao = new UserDAO();

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if (isset($_POST['salvar'])){

                $user->setCpf($_POST['cpf']);
                $user->setParticipacoes($_POST['participacoes']);
                $user->setInstagram($_POST['instagram']);

                $userDao->saveUser($user);
                return $userDao;
            }
        }
        return null;
    }
}