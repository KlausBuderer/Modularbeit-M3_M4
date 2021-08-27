<?php
require_once 'header.php';
require_once 'navbar_eltern.php';
require_once 'sidebar_eltern.php';

$kinder = array();
$kinder = $_SESSION['kinderListe'];



?>

<!-- Eltenübersicht -->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="chartjs-size-monitor">
    <div class="chartjs-size-monitor-expand">
      <div class=""></div>
    </div>
    <div class="chartjs-size-monitor-shrink">
      <div class=""></div>
    </div>
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="display-1">Elternübersicht</h1>

  </div>


<!-- 
  Ausgabe der dem User zugewiesenen Kinder in einer dynamischen Tabelle

  Die zugewiesenen Kinder werden aus der Datenbank gelesen und hier dargestellt. Werden weitere Kinder angelegt wird
  die Liste erweitert.

-->
  <?php

  foreach ($kinder as $kind) {
    echo '<form action="" method="POST">';
    echo '<ul class="list-group">';
    echo   ' <li class="list-group-item d-flex justify-content-between">';
    echo       $kind[0];
    echo   ' <div class="dropdown">';
    echo        '<button class="btn btn-outline-secondary d-flex justify-content-center d-md-table mx-auto dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; border-color: transparent;">';
    echo        '<img src="images/three-dots.svg" alt="Menü">';
    echo       ' </button>';

    echo        '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
    echo         '<input type="hidden" name="kindsname" value="' . $kind[0] . '">';
    echo         '<input type="hidden" name="kindId" value="' . $kind[1] . '">';
    echo         ' <li><button type="submit" name="mediengutschein" class="dropdown-item" >Mediengutschein</button></li>';
    echo          '<li><button type="submit" name="lernfortschritt" class="dropdown-item" >Lernfortschritt</button></li>';
    echo        '</ul>';

    echo    '</div>';
    echo    '</li>';

    echo    '</ul>';
    echo        '</form>';
  }

  ?>

  <br>
  <!-- Button für weiters Kind hinzufügen -->
  <div class="d-grid gap-2">
    <a type="button" href="../features/eltern/kind_hinzufuegen/kind_hinzufuegen_view.php" class="btn btn-outline-secondary">Kind hinzufügen</a>
  </div>

  <?php require('footer.php');

  require_once '../features/eltern/mediengutschein_verwaltung/mg_verwaltung_controller.php';
  require_once '../features/eltern/lernfortschritt/lernfortschritt_controller.php';

// Mediengutschein des ausgewähltem Kind verwalten

  if (isset($_POST["mediengutschein"])) {
    $kindId = $_POST["kindId"];
    $kindsname = $_POST["kindsname"];
    getMediengutscheine($kindId, $kindsname);
    unset($_POST['mediengutschein']);
  }

  // Lernfortschritte des ausgewahlten Kind einsehen

  if (isset($_POST["lernfortschritt"])) {
    $kindId = $_POST["kindId"];
    $kindsname = $_POST["kindsname"];
    getLernfortschritt($kindId, $kindsname);
    unset($_POST['lernfortschritt']);
  }

  function getMediengutscheine($kindId, $kindsname)
  {

    new MediengutscheinVerwaltung($kindId, $kindsname);
  }

  function getLernfortschritt($kindId, $kindsname)
  {
    new LernfortschrittController($kindId, $kindsname);
  }

  ?>