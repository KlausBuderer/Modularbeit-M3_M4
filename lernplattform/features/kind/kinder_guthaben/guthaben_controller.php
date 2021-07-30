<?php

require_once 'guthaben_view.php';


//Holt aktuelles Guthaben des Users

$guthaben = 55;

//Ruft GuthabenView auf und uebergibt das aktuelle Guthaben


$guthabenView = new GuthabenView($guthaben);
$guthabenView->showGuthaben();

