<?php

namespace Kernel;


class FormeValidation {
    private string $username;
    private string $email;
    private string $password;
    private string $passwordConfirme;
    public $error = [];

    public function __construct($username , $email , $password , $passwordConfirme){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirme = $passwordConfirme;
    }

    
    public function passwordValide(){
        if($this->password !== $this->passwordConfirme){
            array_push($this->error , "le mot de passe incorecte");
            return false;
        }
        if($this->password == "" || $this->passwordConfirme == ""){
            array_push($this->error , "le mot de passe est vide");

            return false;
        }


        return true;
    }

    public function emailValidation(){
        if($this->email == ""){
            array_push($this->error , "email ne peut pas etre vide");
            return false;
        }
        return true;
    }
    public function usernameValidation() {
        if($this->username == ""){
            array_push($this->error , "le nom est vide");
            return false;
        }
        if(!(preg_match("/^[a-zA-Z0-9_ ]+$/",$this->username))){
            array_push($this->error , "le nom ne peut pas avoir des caracter spetiaux");
            return false;
        }
        return true;
    }

    public function is_valide(){
        $this->passwordValide();
        $this->emailValidation();
        $this->usernameValidation();
        if(!(empty($this->error))){
            return $this->error;
        }
        return true;
    }
}