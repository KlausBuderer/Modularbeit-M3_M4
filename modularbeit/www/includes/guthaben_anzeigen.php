<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

$erzieltePunktzahl = $_POST['erzieltePunkte'];
$guthaben = $_POST['guthaben'];
$neuePunktzahl = $_POST['totalPunkte'];
?>

<!-- Mediengutschein Guthabensanzeige nach einer Aufgabe -->
<br>
<br>


<div class="container">


  <div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
    <h1>Gut gemacht!!!</h1>
    <h2>Weiter so...</h2>

    <!-- Aktueller Punktestand in einem Progressbar -->
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: <?= $neuePunktzahl . "%"; ?>"><?= $neuePunktzahl . "Punkte"; ?></div>
    </div>

    <br>
    <!-- Ausgabe aktuelles Medienguthaben -->
    <p>Dein aktuelles Medienguthaben ist: <?= $guthaben; ?>h</p>



    <!-- Zurückbutton -->
    <p><a href="/index.php" class="start btn btn-primary btn-lg" role="button">Weiter</a></p>
  </div>




</div>


<?php include 'footer.php'; ?>