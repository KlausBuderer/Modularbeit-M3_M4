<?php

require_once '../model/lerneinheiten/Guthaben.php';
require_once '../features/eltern/eltern_uebersicht/eltern_uebersicht_controller.php';

use Model\Lerneinheit\Guthaben;

class setGuthabenController{

public function __construct($kindsname, $kindsId, $neuGuthaben, $userId) {

    //Speichen des neuen Guthabens
    $set = new Guthaben($kindsId);
    $set->setGuthaben($neuGuthaben);

    print_r($neuGuthaben);
    print_r($kindsId);
      //Zurück in die Mediengutscheinsverwaltung mit neuem Guthaben
     $back = new ElternuebersichtController($userId);
     
}



}