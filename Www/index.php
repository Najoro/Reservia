<?php

use App\Controler\ReserviaControler;
use Kernel\Connexion;

//demarer le session 
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

//header
include("../App/Views/header.php");
include("../include.php");

//body
$controlerGet = $_GET['controler'];
$actionGet = $_GET['action'];

if($controlerGet == "" || $actionGet == '') {
    $controlerGet = 'Reservia';
    $actionGet = 'index';
}

$controler = "App\\Controler\\".$controlerGet."Controler";
$newControler = new $controler();
$action = $newControler->$actionGet();
$action->display();

//footer
include("../App/Views/footer.php");

// var_dump($_SESSION);