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
    $userId = $_POST["userId"];
}



//Lernfortschritt abspeichern
$setLernfortschritt = new SetLernfortschritt($anzRichtig, $anzFragen, $abbruch, $stufe, $lerneinheit, $lernmodul);

$setLernfortschritt->setLernfortschritt();

//Punkte User zuweisen und Mediengutschein berechnen
$addPointsToUser = new AddPointsToUser($setLernfortschritt->getPunkte(), $userId);

$view = new Lernfortschritt_speichern_View($setLernfortschritt->getPunkte(), $addPointsToUser->getNeuPunkte(), $addPointsToUser->getActualGuthaben());
$view->ausgabe();


 