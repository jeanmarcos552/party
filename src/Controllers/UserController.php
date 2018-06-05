<?php

namespace App\Controllers;

use App\dao\UserDAO;
use App\Model\User;

class UserController
{

    public function index()
    {
        $userDao = new UserDAO();
        array_walk($userDao->listUser(), function ($user){ ?>
           <table border="1px" style="width: 100%;">
               <tr style="width: 100%;">
                   <td><?= $user['cpf']?></td>
                   <td><?= $user['description']?></td>
                   <td><?= $user['email']?></td>
               </tr>
           </table>
        <?php });
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