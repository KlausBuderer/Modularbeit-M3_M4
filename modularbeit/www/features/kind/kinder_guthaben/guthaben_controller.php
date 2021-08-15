<?php

require_once 'guthaben_view.php';
require_once '../../../model/lerneinheiten/Guthaben.php';
require_once '../../../users/init.php';

//Holt aktuelles Guthaben des Users

$guthaben = 55;
$guthabenObj = new Guthaben($user->data()->id);



//Ruft GuthabenView auf und uebergibt das aktuelle Guthaben


$guthabenView = new GuthabenView($guthabenObj->getGuthaben(), $guthabenObj->getPunkte());
$guthabenView->showGuthaben();

