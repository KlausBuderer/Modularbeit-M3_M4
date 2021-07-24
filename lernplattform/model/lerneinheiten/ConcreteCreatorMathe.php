<?php

include_once "Creator.php";
include_once "einxeins.php";
include_once "dreisatz.php";

class ConcreteCreatorMathe extends Creator{

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
        case 'einxeins':
            # code...
            $lerninhalt = $this->produce(new EinXEins($stufe));
            
            
            break;
        case 'dreisatz':
            $lerninhalt = $this->produce(new Dreisatz($stufe));
            break;
        case 'einheiten':
            # code...
            $lerninhalt = $this->produce(new EinXEins($stufe));
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