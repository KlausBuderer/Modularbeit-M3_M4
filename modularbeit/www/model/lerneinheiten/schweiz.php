<?php


include_once "produceble.php";
include_once "aufgabe.php";
include_once "getlerninhalt.php";

class Schweiz implements Produceble{


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
private function getAufgaben(){

$getData = new GetLerninhalt($this->stufe, "le_lm_realien_schweiz");

return $getData->selectLerninhalt();

}


function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data). ')';
    echo '</script>';

}


}