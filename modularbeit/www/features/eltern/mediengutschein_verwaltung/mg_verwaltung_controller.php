<?php

require_once '../model/lerneinheiten/Guthaben.php';
require_once 'mg_verwaltung_view.php';

//

class MediengutscheinVerwaltung{

    private $medienGuthaben;
    private $punkte;
    private $kindsname;



public function __construct($kindId, $kindsname) {

    $this->kindsname = $kindsname;

    //Hole Guthaben und Punkte aus der Datenbank
    $guthaben = new Guthaben($kindId);
    $this->medienGuthaben = $guthaben->getGuthaben();
    $this->punkte = $guthaben->getPunkte();

    $view = new MediengutscheinVerwaltungView($this->kindsname, $kindId, $this->medienGuthaben, $this->punkte);
    $view->showGuthaben();


}

}