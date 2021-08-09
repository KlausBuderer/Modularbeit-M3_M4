<?php

include_once "concretecreatormathe.php";
include_once "concretecreatorrealien.php";

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
            $this->console_log('Model aufgerufen');
        default:
            # code...
            break;
    }


    return $lerninhalt;

}

private function getLerninhalt(Creator $creator){

return $creator->produceLerninhalt();

}
function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data). ')';
    echo '</script>';
    
    }

}