<?php

namespace Model\Lerneinheit;

use Model\Lerneinheit\Creator;
use Model\Lerneinheit\EinXEins;
use Model\Lerneinheit\PlusMinus;
use Produceble;


include_once "Creator.php";
include_once "EinXEins.php";
include_once "Dreisatz.php";
include_once "PlusMinus.php";

//Concrete Creator des Factory Patterns für das Modul Mat

class ConcreteCreatorMathe extends Creator
{

    private $lerneinheit;
    private $stufe;


    public function __construct($stufe, $lerneinheit)
    {
        $this->lerneinheit = $lerneinheit;
        $this->stufe = $stufe;
    }

    public function produceLerninhalt()
    {

        $lerneinheit = $this->lerneinheit;
        $stufe = $this->stufe;
        $lerninhalt = [];

        switch ($lerneinheit) {

            case 'einxeins':
                $lerninhalt = $this->produce(new EinXEins($stufe));
                break;

            case 'dreisatz':
                $lerninhalt = $this->produce(new Dreisatz($stufe));
                break;
                
            case 'plus_minus':
                $lerninhalt = $this->produce(new PlusMinus($stufe));
                break;

            default:

                break;
        }


        return $lerninhalt;
    }

    private function produce(Produceble $lerneinheit)
    {

        return $lerneinheit->produce();
    }
}
