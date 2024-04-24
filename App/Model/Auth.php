<?php 

namespace App\Model;

use Kernel\Connexion;

class Auth {
    public static function insert(){
        $query = "INSERT INTO users(name,email,password,tel) VALUES(:name,:email,:password,:tel)";

        $name = $_POST['username'];
        $email = $_POST['email'];
        $mdp =  $_POST['password'];
        $tel =  $_POST['tel'];

        Connexion::execute($query,[
            'name'=> $name,
            'email'=> $email,
            'password' => $mdp,
            'tel' => $tel,
        ]);
    }

    public static function selectUser($username , $password){
        $query = "SELECT * FROM users WHERE name LIKE '%$username%' AND password LIKE '$password'";
        return Connexion::query($query);
    }
}