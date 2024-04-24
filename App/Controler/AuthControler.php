<?php

namespace App\Controler;


use Kernel\View;
use Kernel\FormeValidation;
use App\Model\Auth;
use Kernel\Fonction;

class AuthControler {

    public static function login(){
        return new View('Auth/login.php');
    }
    public static function sing(){
        return new View('Auth/sing.php');
    }

    public static function insert(){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $mdp =  $_POST['password'];
        $mdpconfirm = $_POST['ConfirmePassword'];
        // var_dump($_POST);
        $form = new FormeValidation($name ,$email , $mdp , $mdpconfirm);
        $valide = $form->is_valide();
        // var_dump($valide);
        if(is_array($valide)){
            return new View('Auth/sing.php' , ['errors' => $valide]);
        }
        if(is_bool($valide)){
            Auth::insert();
            return new View('Auth/login.php');
        }
    }

    public static function connecte() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = Auth::selectUser($username , $password);
        if(empty($user)){
            return new View('Auth/login.php', ['error' => "verifie bien votre Information"]);
            exit();
        }
        session_start();
        $_SESSION['user'] = $user;
        header("Location:.?controler=Auth&action=user");
        return new View('Auth/user.php', ['user' =>  $_SESSION['user'][0]]);
    }
    public static function user() {
        return new View('Auth/user.php', ['user' => $_SESSION['user'][0]]);
    }
    public static function logout(){
        unset($_SESSION['user']);
        header("Location:.?controler=Auth&action=login");
    }

}