<?php

namespace App\dao;

use App\Model\User;
use App\database\BD;

class UserDAO
{

    public function saveUser(User $user)
    {
        try{
            $sql = "INSERT INTO user (id_instagram, id_instagram_hash, my_instagram, name, image_url ) values (?, ?, ?, ?, ?) ";

            $stmt = BD::getConnection()->prepare($sql);
            $stmt->bindValue(1, $user->getIdInstagram());
            $stmt->bindValue(2, $user->getIdInstagramHash());
            $stmt->bindValue(3, $user->getMyInstagram());
            $stmt->bindValue(4, $user->getName());
            $stmt->bindValue(5, $user->getImageUrl());
            $stmt->execute();

            return true;

        }catch (\Exception $e){
            print_r($e->getMessage());
            return $e->getCode();
        }
    }

    public function listUser()
    {
        try{
            $sql = "SELECT u.*, p.description FROM permissions AS p JOIN user AS u ON p.id = u.permission_id";
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
            $sql = "UPDATE user SET cpf=?, indicated_instagram=?, email=?, date_modified=? WHERE id_instagram_hash = ?";
            $stmt = BD::getConnection()->prepare($sql);
            $stmt->bindValue(1, $user->getCpf());
            $stmt->bindValue(2, $user->getIndicatedInstagram());
            $stmt->bindValue(3, $user->getEmail());
            $stmt->bindValue(4, date("Y-m-d h:i:sa"));
            $stmt->bindValue(5, $user->getIdInstagramHash());
            $stmt->execute();

            return true;
        }catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function listUserForId($id)
    {
        try{
            $sql = "SELECT u. FROM permissions AS p JOIN user AS u ON p.id = u.permission_id";
            $stmt = BD::getConnection()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();
            return $result;

        }catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}