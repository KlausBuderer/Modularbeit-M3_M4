<?php



if (file_exists('model/lerneinheiten/Elternuebersicht.php')) {
  require_once 'model/lerneinheiten/Elternuebersicht.php';
} elseif (file_exists('../model/lerneinheiten/Elternuebersicht.php')) {

  require_once '../model/lerneinheiten/Elternuebersicht.php';
}

require_once 'eltern_uebersicht_view.php';

use Model\Lerneinheit\Elernuebersicht;
//In dieser Klasse wird die Elternübersicht bearbeitet
class ElternuebersichtController
{

  private $elternuebersicht;


  public function __construct($userId)
  {
    //Sobald sich ein Elternteil anmeldet werden die dazugehörigen Kinder aus dem Model aufgefordert
    $this->elternuebersicht = new Elernuebersicht($userId);
    //Die Kinder werden dann dem View weitergegeben um sie dann in der Übersicht darzustellen
    $view = new ElternuebersichtView($this->elternuebersicht->getKinder());
    $view->showKinder();
  }
}
