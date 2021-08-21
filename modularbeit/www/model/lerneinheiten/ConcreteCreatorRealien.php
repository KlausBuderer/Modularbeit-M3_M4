<?php
namespace Model\Lerneinheit;

use Model\Lerneinheit\Creator;
use Model\Lerneinheit\HauptstaedteLaender;
use Model\Lerneinheit\Schweiz;
use Model\Lerneinheit\Tiere;
use Produceble;

include_once "Creator.php";
include_once "HauptstaedteLaender.php";
include_once "Schweiz.php";
include_once "Tiere.php";  




class ConcreteCreatorRealien extends Creator{

private $lerneinheit;
private $stufe;


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
          

            $lerninhalt = $this->produce(new HauptstaedteLaender($stufe));

            break;
        case 'schweiz':
         

            $lerninhalt = $this->produce(new Schweiz($stufe));

            break;
        case 'tiere':
           

            $lerninhalt = $this->produce(new Tiere($stufe));

            break;
        
        default:
        
            break;
    }


    return $lerninhalt;

}

private function produce(Produceble $lerneinheit){

    return $lerneinheit->produce();
  
}

}