<?php

class Lernfortschritt_speichern_view{

public $erzieltePunkte;
public $punkteGuthaben;
public $mediengutscheine;

public function __construct($erzieltePunkte, $punkteGuthaben, $mediengutscheine)
{
    $this->erzieltePunkte = $erzieltePunkte;
    $this->punkteGuthaben = $punkteGuthaben;
    $this->mediengutscheine = $mediengutscheine;
}

public function ausgabe(){

    include "../../../includes/guthaben_anzeigen.php";
}


function console_log($data){
echo '<script>';
echo 'console.log('.json_encode($data). ')';
echo '</script>';

}

}