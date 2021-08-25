<?php

require_once "../model/lerneinheiten/LerninhaltModel.php";
require_once "../features/kind/lerneinheit_waehlen/lerneinheit_waehlen_view.php";

use Model\Lerneinheit\LerninhaltModel;


class Lerninhalt
{

    public $lerneinheit;
    public $stufe = 0;
    public $lerninhalt;
    public $modul;

    public function setModul($lerninhalt, $stufe, $modul)
    {
        //Ruft die Factory auf um eine Lerneinheit zu produzieren
        $producedLerneinheit = new LerninhaltModel($stufe, $lerninhalt, $modul);

        //Übergibt die Lerneinheit dem View
        $view = new LerneinheitWaehlenView($producedLerneinheit->createLerninhalt(), $modul, $lerninhalt, $stufe);
        $view->ausgabe();
    }
}
