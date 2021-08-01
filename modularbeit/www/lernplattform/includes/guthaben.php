<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

$guthaben = $this->guthaben;
 
?>


<br>
<br>

<div class="container">
      

<div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
        <h1>Hallo User</h1>
        <h2>Du verfügst über <?php echo $guthaben; ?> Mediengutscheine</h2>
        <p></p>

        <p>Sehr gut, weiter so...</p>



        <p><a href="/lernplattform/includes/kinder_uebersicht_template.php" class="start btn btn-primary btn-lg" role="button">Weiter</a></p>
      </div>




</div>


    <?php include 'footer.php'; ?>