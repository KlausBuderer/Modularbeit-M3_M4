<?php

class LerneinheitWaehlenView{

public $lerneinheit = [];

public function __construct($lerneinheit)
{
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