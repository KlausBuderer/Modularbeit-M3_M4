<?php

//Klasse für die Anzeige der vorhandenen Mediengutscheine

class MediengutscheinVerwaltungView{

    private $kindsname;
    private $kindsId;
    private $guthaben;
    private $punkte;

public function __construct($kindsname, $kindsId, $guthaben, $punkte) {
    $this->kindsname = $kindsname;
    $this->kindsId = $kindsId;
    $this->guthaben = $guthaben;
    $this->punkte = $punkte;
}

//Ruft Mediengutscheinverwaltungview auf und übergibt das aktuelle Guthaben und die aktuellen Punkte
public function showGuthaben(){

    echo '<form id="myForm" action="/includes/mediengutschein.php" method="post">';

    echo '<input type="hidden" name="kindsname" value="'. $this->kindsname.'">';
    echo '<input type="hidden" name="kindsId" value="'. $this->kindsId.'">';
    echo '<input type="hidden" name="punkte" value="'. $this->punkte.'">'; 
    echo '<input type="hidden" name="guthaben" value="'. $this->guthaben.'">';


       echo  '</form>';
       echo '<script type="text/javascript">';
         echo "document.getElementById('myForm').submit()";
     echo '</script>';
     }


}