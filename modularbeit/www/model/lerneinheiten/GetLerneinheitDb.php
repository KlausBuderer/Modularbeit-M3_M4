<?php

namespace Model\Lerneinheit;

use Produceble;
use Model\Lerneinheit\Aufgabe;
use Model\Lerneinheit\GetLerninhalt;

include_once "Produceble.php";
include_once "Aufgabe.php";
include_once "GetLerninhalt.php";



class GetLerneinheitDb implements Produceble
{


    protected $stufe;
    private $table;


    public function __construct($stufe, $table)
    {
        $this->stufe = $stufe;
        $this->tabel = $table;
    }


    public function produce()
    {
        return $this->getAufgaben();
    }

    //Holt die Daten aus der Datenbank und gibt ein Array mit Aufgaben zurück
    private function getAufgaben()
    {

        $getData = new GetLerninhalt($this->stufe, $this->table);

        return $getData->selectLerninhalt();
    }
}
