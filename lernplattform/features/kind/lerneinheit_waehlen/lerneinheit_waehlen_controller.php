<?php

include "../../../model/lerneinheiten/lerninhalt_model.php";
include "./lerneinheit_waehlen_view.php";


$lerneinheit;
$stufe = 0;
$lerninhalt;
$modul;

if(isset($_POST["einxeins"])){
    $lerninhalt = "einxeins";
    $stufe = $_POST["stufe1"];
    $modul = "mathe";
}

if(isset($_POST["dreisatz"])){
    $lerninhalt = "dreisatz";
    $stufe = $_POST["stufe2"];
    $modul = "mathe";
}

if(isset($_POST["einheiten"])){
    $lerninhalt = "einheiten";
    $stufe = $_POST["stufe3"];
    $modul = "mathe";
}



if(!$lerninhalt == ""){

//Instanziere die Klasse um die Lerneinheit zu generieren und übergebe die Parameter an die Methode 
$producedLerneinheit = new LerninhaltModel($stufe,$lerninhalt, $modul);
//Instanziere das View und übergebe das Array mit den Lerneinheiten
$view = new LerneinheitWaehlenView($producedLerneinheit->createLerninhalt());
$view->ausgabe();

//console_log($producedLerneinheit->createLerninhalt());

}


function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data). ')';
    echo '</script>';
    
    }