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

    echo '<form id="myForm" action="/includes/guthaben_anzeigen.php" method="post">';
    echo '<input type="hidden" name="lerninhalt" value="'. $this->erzieltePunkte.'">';
    echo '<input type="hidden" name="stufe" value="'. $this->punkteGuthaben.'">';
    echo '<input type="hidden" name="modul" value="'. $this->mediengutscheine.'">';
 
       echo  '</form>';
       echo '<script type="text/javascript">';
         echo "document.getElementById('myForm').submit()";
     echo '</script>';
}


function console_log($data){
echo '<script>';
echo 'console.log('.json_encode($data). ')';
echo '</script>';

}

}