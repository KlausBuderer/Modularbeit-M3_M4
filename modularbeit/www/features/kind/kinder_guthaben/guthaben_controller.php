<?php

require_once 'guthaben_view.php';
require_once '../../../model/lerneinheiten/Guthaben.php';


//Holt aktuelles Guthaben des Users

$guthaben = 55;
$guthabenObj = new Guthaben(19);



//Ruft GuthabenView auf und uebergibt das aktuelle Guthaben


$guthabenView = new GuthabenView($guthabenObj->getGuthaben(), $guthabenObj->getPunkte());
$guthabenView->showGuthaben();

