<?php

namespace Model\Lerneinheit;

use Produceble;
use Model\Lerneinheit\Aufgabe;
use Model\Lerneinheit\GetLerninhalt;

include_once "Produceble.php";
include_once "Aufgabe.php";
include_once "GetLerninhalt.php";

//Factory Pattern
//Klasse für das erstellen von Hauptstadtlaender Aufgaben

class HauptstaedteLaender implements Produceble
{


    protected $stufe;

    public function __construct($stufe)
    {
        $this->stufe = $stufe;
    }


    public function produce()
    {

        return $this->getAufgaben();
    }

    //Holt die Daten aus der Datenbank und gibt ein Array mit Aufgaben zurück
    private function getAufgaben()
    {

        $getData = new GetLerninhalt($this->stufe, "le_lm_realien_laender");

        return $getData->selectLerninhalt();
    }
}
