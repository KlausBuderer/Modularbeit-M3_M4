<?php

include_once "creator.php";
include_once "hauptstaedtelaender.php";


class ConcreteCreatorRealien extends Creator{

private $lerneinheit;
private $stufe;
private $lerninhalt = [];

public function __construct($stufe, $lerneinheit)
{
    $this->lerneinheit = $lerneinheit;
    $this->stufe = $stufe;
    
}

public function produceLerninhalt(){

    $lerneinheit = $this->lerneinheit;
    $stufe = $this->stufe;
    $lerninhalt = [];

    switch ($lerneinheit) {
        case 'hauptstaedte_laender':
            # code...
            $this->console_log('Concrete Creator aufgerufen');
            $lerninhalt = $this->produce(new HauptstaedteLaender($stufe));

            break;

        
        default:
        
            break;
    }


    return $lerninhalt;

}

private function produce(Produceble $lerneinheit){

    return $lerneinheit->produce();
  
}


function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data). ')';
    echo '</script>';
    
    }
}