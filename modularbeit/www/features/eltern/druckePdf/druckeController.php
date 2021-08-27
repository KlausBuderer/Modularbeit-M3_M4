<?php

use Model\Lerneinheit\Guthaben;

include_once '../features/eltern/mediengutschein_verwaltung/mg_verwaltung_view.php';

class DruckePdf{


public function __construct($kindsname, $stunden, $guthaben, $punkte, $kindsId, $userId) {
 
$neuGuthaben = $guthaben-$stunden;
$this->setNewGuthaben($kindsId, $neuGuthaben);


$this->print($stunden);

$view = new MediengutscheinVerwaltungView($kindsname, $kindsId, $neuGuthaben, $punkte);
$view->showGuthaben();

}  

private function print($stunden){
echo '<a id="pdf" href="pdfGutschein.php?h='.$stunden.'" target="_blank">PDF</a>';
echo "<script type='text/javascript'>window.open('pdfGutschein.php?h=".$stunden."', '_blank');</script>";
}

private function setNewGuthaben($kindsId, $neuGuthaben){

 if ($neuGuthaben < 0) {
   $neuGuthaben = 0;
 } 

$setGuthaben = new Guthaben($kindsId);
$setGuthaben->setGuthaben($neuGuthaben);

}

}
