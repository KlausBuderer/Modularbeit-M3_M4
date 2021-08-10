<?php

require_once '../model/lerneinheiten/GetLernfortschritt.php';
require_once 'lernfortschritt_view.php';

class LernfortschrittController{




public function __construct($kindsId, $kindsname) {

//Holt Lernforschritt aus der Datenbank
$lernfortschritt = new GetLernfortschritt($kindsId);
$result = $lernfortschritt->getLernfortschritt();

//Übergit Lernfortschritt am View
 $view = new LernfortschrittView($result, $kindsname);
 $view->showLernfortschritt();  
print_r($kindsId);
print_r($result);
}


}