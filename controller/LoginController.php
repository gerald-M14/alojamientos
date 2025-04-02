<?php

require_once "config/database.php";
require_once "models/UserModel.php";

class LoginController{
     
   public static function login($email, $password){
    $user= UsersModel::findEmailAndPassword($email, $password);

    if($user){
        $role = $user['id_role'];

        $_SESSION['User'] = $user['name'];
        $_SESSION['code'] = $user["id_user"];

        if($role == 1 ){
            header('Location: ./views/adminView.php');
        }else{
            header("Location: ./views/UserViewMejorado.php");
        }
    }else{
        return "<div class='alert alert-danger' role='alert'>
                    Credenciales Incorrectas!
                </div>";
    }
   }
}