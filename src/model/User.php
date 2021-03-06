<?php

namespace App\model;

class User
{
    private $cpf;
    private $id_instagram;
    private $id_instagram_hash;
    private $myInstagram;
    private $indicatedInstagram;
    private $name;
    private $email;
    private $password;
    private $permissions;
    private $date_create;
    private $data_modified;
    private $image_url;

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getIdInstagram()
    {
        return $this->id_instagram;
    }

    /**
     * @param mixed $id_instagram
     */
    public function setIdInstagram($id_instagram)
    {
        $this->id_instagram = $id_instagram;
    }


    /**
     * @return mixed
     */
    public function getMyInstagram()
    {
        return $this->myInstagram;
    }
    /**
     * @return mixed
     */
    public function getIdInstagramHash()
    {
        return $this->id_instagram_hash;
    }

    /**
     * @param mixed $id_instagram_hash
     */
    public function setIdInstagramHash($id_instagram_hash)
    {
        $this->id_instagram_hash = $id_instagram_hash;
    }

    /**
     * @param mixed $myInstagram
     */
    public function setMyInstagram($myInstagram)
    {
        $this->myInstagram = $myInstagram;
    }

    /**
     * @return mixed
     */
    public function getIndicatedInstagram()
    {
        return $this->indicatedInstagram;
    }

    /**
     * @param mixed $indicatedInstagram
     */
    public function setIndicatedInstagram($indicatedInstagram)
    {
        $this->indicatedInstagram = $indicatedInstagram;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    /**
     * @return mixed
     */
    public function getPermission()
    {
        return $this->permissions;
    }

    /**
     * @param mixed $permission
     */
    public function setPermission($permission)
    {
        $this->permissions = $permission;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * @param mixed $date_create
     */
    public function setDateCreate($date_create)
    {
        $this->date_create = $date_create;
    }

    /**
     * @return mixed
     */
    public function getDataModified()
    {
        return $this->data_modified;
    }

    /**
     * @param mixed $data_modified
     */
    public function setDataModified($data_modified)
    {
        $this->data_modified = $data_modified;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @param mixed $image_url
     */
    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
    }
}