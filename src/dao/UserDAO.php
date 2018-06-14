<?php

namespace App\dao;

use App\Model\User;
use App\database\BD;

class UserDAO
{

    public function saveUser(User $user)
    {
        try{
            $sql = "INSERT INTO user (cpf, my_instagram, name, image_url) values ( ?, ?, ?, ?)";
            $stmt = BD::getConnection()->prepare($sql);
            $stmt->bindValue(1, $user->getCpf());
            $stmt->bindValue(2, $user->getMyInstagram());
            $stmt->bindValue(3, $user->getName());
            $stmt->bindValue(4, $user->getImage());
            $stmt->execute();

            return "Usuario " . $user->getName() . " cadastrado com sucesso!";

        }catch (\Exception $e){
            print_r($e->getMessage());
            return false;
        }
    }

    public function listUser()
    {
        try{
            $sql = "SELECT u.cpf, u.email, p.description FROM permissions AS p JOIN user AS u ON p.id = u.permission_id";
            $stmt = BD::getConnection()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();

            return $result;
        }catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function updateUser(User $user)
    {
        try {
            $sql = "UPDATE user SET name=?, email=?, password=?, permission_id=?, date_modified=? WHERE cpf = ?";
            $stmt = BD::getConnection()->prepare($sql);
            $stmt->bindValue(1, $user->getName());
            $stmt->bindValue(2, $user->getEmail());
            $stmt->bindValue(3, $user->getPassword());
            $stmt->bindValue(4, $user->getPermission());
            $stmt->bindValue(5, date("Y/m/d h:i:sa"));
            $stmt->bindValue(6, $user->getCpf());
            $stmt->execute();

            return "Usuário alterado com sucesso!";
        }catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}