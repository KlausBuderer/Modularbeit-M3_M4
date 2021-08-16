<?php

require_once "../model/lerneinheiten/LerninhaltModel.php";
require_once "../features/kind/lerneinheit_waehlen/lerneinheit_waehlen_view.php";

class Lerninhalt{

public $lerneinheit;
public $stufe = 0;
public $lerninhalt;
public $modul;

public function setModul($lerninhalt, $stufe, $modul)
{
    $producedLerneinheit = new LerninhaltModel($stufe,$lerninhalt, $modul);

 
    $view = new LerneinheitWaehlenView($producedLerneinheit->createLerninhalt(), $modul, $lerninhalt, $stufe);
    $view->ausgabe();
    
}

}