<?php

class LerneinheitWaehlenView{

public $lerneinheit = [];
public $lerninhalt;
public $stufe;
public $modul;

public function __construct($lerneinheit, $modul, $lerninhalt, $stufe)
{
    $this->lerninhalt = $lerninhalt;
    $this->stufe = $stufe;
    $this->modul = $modul;
    $this->lerneinheit = $lerneinheit;
}

public function ausgabe(){

    include "../../../includes/aufgaben.php";
}


function console_log($data){
echo '<script>';
echo 'console.log('.json_encode($data). ')';
echo '</script>';

}

}