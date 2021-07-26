<?php
include "../../../model/lerneinheiten/setLernfortschritt.php";
include "./lernfortschritt_speichern_view.php";

if(isset($_POST["beenden"])){
    $anzRichtig = $_POST["anzRichtig"];
    $anzFragen = $_POST["anzFragen"];
    $abbruch = $_POST["abbruch"];
    $stufe = $_POST["stufe"];
    $lerneinheit = $_POST["lerneinheit"];
    $lernmodul = $_POST["lernmodul"];
}


$setLernfortschritt = new SetLernfortschritt($anzRichtig, $anzFragen, $abbruch, $stufe, $lerneinheit, $lernmodul);

$setLernfortschritt->setLernfortschritt();

 console_log($anzRichtig);
 console_log($anzFragen);
 console_log($abbruch);
 console_log($stufe);
 console_log($lerneinheit);
 console_log($lernmodul);

  function console_log($data){
  echo '<script>';
  echo 'console.log('.json_encode($data). ')';
  echo '</script>';

 } 
 