<?php

include_once "ConcreteCreatorMathe.php";

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
        
        default:
            # code...
            break;
    }

    /* $this->console_log($stufe);
    $this->console_log($modul);
    $this->console_log($lerneinheit);
    $this->console_log($lerninhalt); */

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