<?php

namespace App\Model;

use Kernel\Connexion;

class Reservia{

    public static function allHotel(){
        $query = 'SELECT * FROM Hotel';
        return Connexion::query($query);
    }
    public static function populaire($name="Mar"){
        $query = "SELECT * FROM Hotel WHERE price>=100 && ville LIKE '%$name%' OR continent LIKE '%$name%'  LIMIT 3";
        return Connexion::query($query);
    }
    public static function Hebergement($name="Mar"){
        $query = "SELECT * FROM Hotel WHERE price<100 && ville LIKE '%$name%' OR continent LIKE '%$name%' LIMIT 6";
        return Connexion::query($query);
    }
    public static function activity($name="Mar"){
        $query = "SELECT * FROM Images WHERE ville LIKE '%$name%' OR continent LIKE '%$name%' LIMIT 6";
        return Connexion::query($query);
    }

    public static function find($id){
        $query = "SELECT * FROM Hotel WHERE id=$id";
        return Connexion::query($query);
    }

}