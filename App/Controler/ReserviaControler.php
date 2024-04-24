<?php

namespace App\Controler;

use App\Model\Reservia;
use Kernel\Connexion;
use Kernel\View;


class ReserviaControler{

    public static function index() {
        if(isset($_GET['search'])){
            $search = $_GET['search'];
            $heberges = Reservia::Hebergement($search);
            $populaires = Reservia::populaire($search);
            $activity = Reservia::activity($search);
        }else{
            $heberges = Reservia::Hebergement();
            $populaires = Reservia::populaire();
            $activity = Reservia::activity();

        }
        return new View('reservia/index.php' , [
            'heberges'=> $heberges,
            'populaires'=> $populaires,
            'activity' => $activity
        ]);
    }
    public static function EachHotel(){
        $id = (int) $_GET['id'];
        $hotel = Reservia::find($id);
        return new View('reservia/EachHotel.php' , ['hotel' => $hotel[0]]);
    }
}