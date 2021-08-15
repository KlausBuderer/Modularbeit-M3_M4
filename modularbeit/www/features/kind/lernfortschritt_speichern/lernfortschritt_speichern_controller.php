<?php
include "../../../model/lerneinheiten/setLernfortschritt.php";
include "../../../model/lerneinheiten/addPointsToUser.php";
include "./lernfortschritt_speichern_view.php";
include_once './nicht_aufgeben_view.php';

if(isset($_POST["beenden"])){
    $anzRichtig = $_POST["anzRichtig"];
    $anzFragen = $_POST["anzFragen"];
    $abbruch = $_POST["abbruch"];
    $stufe = $_POST["stufe"];
    $lerneinheit = $_POST["lerneinheit"];
    $lernmodul = $_POST["lernmodul"];
    $userId = $_POST["userId"];
}

/* //Test
    $anzRichtig = 10;
    $anzFragen = 11;
    $abbruch = false;
    $stufe = 1;
    $lerneinheit = 'einxeins';
    $lernmodul = 'mathe';
    $userId = 22; */


//Lernfortschritt abspeichern
$setLernfortschritt = new SetLernfortschritt($anzRichtig, $anzFragen, $abbruch, $stufe, $lerneinheit, $lernmodul, $userId);

$setLernfortschritt->setLernfortschritt();

//Punkte User zuweisen und Mediengutschein berechnen
$addPointsToUser = new AddPointsToUser($setLernfortschritt->getPunkte(), $userId);


if ($anzRichtig >= 10) {
$view = new Lernfortschritt_speichern_View($setLernfortschritt->getPunkte(), $addPointsToUser->getNeuPunkte(), $addPointsToUser->getActualGuthaben());
$view->ausgabe();
}else{
$viewNichtErfolg = new NichtAufgebenView();
$viewNichtErfolg->ausgabe();
}



 