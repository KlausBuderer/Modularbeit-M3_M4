<?php
namespace Model\Lerneinheit;



include_once "ConcreteCreatorMathe.php";
include_once "ConcreteCreatorRealien.php"; 

use Model\Lerneinheit\ConcreteCreatorMathe;
use Model\Lerneinheit\ConcreteCreatorRealien;
use Model\Lerneinheit\Creator;


class LerninhaltModel{

private $stufe = 0;
private $modul = "";
private $lerneinheit = "";


public function __construct($stufe, $lerneinheit, $modul)
{
    $this->stufe = $stufe;
    $this->lerneinheit = $lerneinheit;
    $this->modul = $modul;
}

//Ruft den Creator auf welcher den Lerninhalt generiert
public function createLerninhalt(){
    $stufe = $this->stufe;
    $lerneinheit = $this->lerneinheit;
    $lerninhalt = [];
    $modul = $this->modul;

    switch ($modul) {
        case 'mathe':
            //Erstellt den Lerninhalt für Mathe
            $lerninhalt = $this->getLerninhalt(new ConcreteCreatorMathe($stufe, $lerneinheit));
            break;
        case 'realien':
            //Erstellt den Lerninhalt für Realien
            $lerninhalt = $this->getLerninhalt(new ConcreteCreatorRealien($stufe,$lerneinheit));
        default:
        
            break;
    }


    return $lerninhalt;

}

private function getLerninhalt(Creator $creator){

return $creator->produceLerninhalt();

}

}