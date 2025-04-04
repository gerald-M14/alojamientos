<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/UserModel.php';

class LoginController{
     
   public static function login($email, $password){
    $user= UsersModel::findEmailAndPassword($email, $password);

    if($user){
        $role = $user['id_role'];

        $_SESSION['User'] = $user['name'];
        $_SESSION['code'] = $user["id_user"];

        if($role == 1 ){
            header('Location: ./adminView.php');
        }else{
            header("Location: ./UserView.php");
        }
    }else{
        return "<div class='alert alert-danger' role='alert'>
                    Credenciales Incorrectas!
                </div>";
    }
   }
}