<?php

namespace App\Model;

class User
{

    private $cpf;
    private $myInstagram;
    private $indicatedInstagram;
    private $name;
    private $email;
    private $password;
    private $permission;
    private $date_create;
    private $data_modified;
    private $image;


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
    public function getMyInstagram()
    {
        return $this->myInstagram;
    }

    /**
     * @param mixed $myInstagram
     */
    public function setMyInstagram($myInstagram)
    {
        $this->myInstagram = '@'.$myInstagram;
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
        return $this->permission;
    }

    /**
     * @param mixed $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}