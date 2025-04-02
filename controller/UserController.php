<?php

require_once"../models/UserModel.php";
require_once"../config/database.php";

class UserController{
    protected $id_user;
    protected $name;
    protected $email;
    private $password;
    protected $age;
    protected $role;

    public function __construct($id, $name, $email, $age, $role)
    {
        $this->id_user = $id;
        $this->name= $name;
        $this->email= $email;
        $this->age = $age;
        $this->role =$role;

    }
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($pass){
        $this->password = $pass;
    }

    public static function getUsers(){
        return UsersModel::all();
    }


    
}