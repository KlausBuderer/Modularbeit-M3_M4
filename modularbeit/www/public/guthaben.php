<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

$guthaben = $_POST['guthaben'];
$punkte = $_POST['punkte'];

?>
<!--Mediengutscheinsguthabenanzeige aus dem Menü  -->

<br>
<br>

<div class="container">

<!-- Ausgabe Mediengutscheine und aktueller Punktestand -->
  <div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
    <h1>Hallo <?= $user->data()->username; ?></h1>
    <h2>Du verfügst über <?php echo $guthaben; ?> Mediengutscheine</h2>
    <p>Es fehlen noch <?= 100 - $punkte ?> Punkte für einen weiteren Mediengutschein!!!</p>
<!-- Anezgeige Punktestand in Progressbar -->
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: <?= $punkte . "%"; ?>"><?= $punkte . "Punkte"; ?></div>
    </div>

    <p>Sehr gut, weiter so...</p>

    <p><a href="/public/kinder_uebersicht_template.php" class="start btn btn-primary btn-lg" role="button">Weiter</a></p>
  </div>

</div>


<?php include 'footer.php'; ?>