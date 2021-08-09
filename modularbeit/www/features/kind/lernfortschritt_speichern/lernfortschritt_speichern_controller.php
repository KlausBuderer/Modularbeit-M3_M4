<?php
include "../../../model/lerneinheiten/setLernfortschritt.php";
include "../../../model/lerneinheiten/addPointsToUser.php";
include "./lernfortschritt_speichern_view.php";

if(isset($_POST["beenden"])){
    $anzRichtig = $_POST["anzRichtig"];
    $anzFragen = $_POST["anzFragen"];
    $abbruch = $_POST["abbruch"];
    $stufe = $_POST["stufe"];
    $lerneinheit = $_POST["lerneinheit"];
    $lernmodul = $_POST["lernmodul"];
}

$erzieltePunkte = 5; 
$punkteGuthaben = 50; 
$mediengutscheine = 0.5;

//Lernfortschritt abspeichern
$setLernfortschritt = new SetLernfortschritt($anzRichtig, $anzFragen, $abbruch, $stufe, $lerneinheit, $lernmodul);

$setLernfortschritt->setLernfortschritt();

//Punkte User zuweisen und Mediengutschein berechnen
$addPointsToUser = new AddPointsToUser();

$view = new Lernfortschritt_speichern_View($erzieltePunkte, $punkteGuthaben, $mediengutscheine);
$view->ausgabe();

//$ler

  function console_log($data){
  echo '<script>';
  echo 'console.log('.json_encode($data). ')';
  echo '</script>';

 } 
 