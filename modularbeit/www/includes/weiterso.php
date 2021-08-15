<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

$text =$_POST['text'];


 
?>

<br>
<br>


<div class="container">
      

<div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
        <h1>Hi <?= $user->data()->username; ?></h1>
        <br>
        <h2><?= $text;?> </h2>
        <br>
        <br>

        <p><a href="/index.php" class="start btn btn-primary btn-lg" role="button">Weiter</a></p>
      </div>




</div>


    <?php include 'footer.php'; ?>