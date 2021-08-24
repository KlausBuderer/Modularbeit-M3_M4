<?php

namespace Model\Lerneinheit;

use Produceble;
use Model\Lerneinheit\GetLerninhalt;
use Model\Lerneinheit\Aufgabe;

include_once "Produceble.php";
include_once "Aufgabe.php";
include_once "GetLerninhalt.php";

//Klasse für die Erstellung der Dreisatzaufgaben

class Dreisatz implements Produceble
{
    protected $stufe;
    private $result;

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

        $getData = new GetLerninhalt($this->stufe, "le_lm_mathematik_textaufgaben");

        return $getData->selectLerninhalt();
    }
}
