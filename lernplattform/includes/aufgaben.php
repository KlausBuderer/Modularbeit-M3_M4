<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

#include_once('/lernplattform/includes/config.php');
#require_once('/lernplattform/includes/header.php');
#require_once('/lernplattform/includes/navbar_login.php');
#require_once('/lernplattform/includes/sidebar.php');


/*  function console_log($data){
  echo '<script>';
  echo 'console.log('.json_encode($data). ')';
  echo '</script>';

 } */
  //console_log($this->lerneinheit); 

  $lerneinheit = $this->lerneinheit;

?>

<div class="container">
      
      <h1 class="text-center fw-lighter display-2">Aufgaben</h1>
        <hr>

      <div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
        <h1>Herzlich Willkommen!</h1>
        <p></p>
        <p><button class="start btn btn-primary btn-lg" role="button">Jetzt starten</button></p>
      </div>
      
      <div id="question" class="question container-fluid bg-light text-dark p-5" style="display:none;" >
        <h2>Frage <span id="qno"></span></h2>
        <p id="question_text">...?</p>
        <div class="row">
          <div class="col-md-6"><p><button id="answer_a_btn" class="answer btn btn-primary btn-lg w-100 antwortButton" role="button">A</A:blank><span id="answer_a">!</span></button></p></div>
          <div class="col-md-6"><p><button id="answer_c_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">B<span id="answer_c">.</span></button></p></div>
        </div>
        <div class="row">
          <div class="col-md-6"><p><button id="answer_b_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">C<span id="answer_b">?</span></button></p></div>
          <div class="col-md-6"><p><button id="answer_d_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">D<span id="answer_d">;</span></button></p></div>
        </div>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <p><button id="answer_commit_btn" class="btn btn-primary btn-lg btn-block" role="button"><span id="commit_text">Antworten</span></button></p>
            <p><button id="continue_btn" class="btn btn-primary btn-lg btn-block" role="button" style="display:none;"><span id="commit_text" >Weiter</span></button></p>
          </div>
        </div>
      </div>
      
      <div id="over" class="container-fluid bg-light text-dark p-5 quiz_end" style="display: none;">
        <h1>Quiz Vorbei!</h1>
        <p>Dein Punktestand ist: <span id="endpoints">0</span> von <span id="possiblepoints">0</span></p>
        <p><button class="restart btn btn-primary btn-lg" role="button">Nochmal starten</button></p>
        <p><a href="/lernplattform/includes/kinder_uebersicht_template.php" class="end btn btn-primary btn-lg" role="button">Beenden</a></p>
      </div>
    </div>

    <hr>

    <div class="container">
      <div class="container-fluid bg-light text-dark p-5">
        <img id="Spieler" class="fortschrittSpieler" src="/lernplattform/includes/images/roboter.png">
        <br>
        <hr>
        <img id="Computer" class="fortschrittComputer" src="/lernplattform/includes/images/roboter.png">
      </div>
    </div>  
 
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript"> var data = <?php echo json_encode($lerneinheit);?> ; </script>

    <script src="/lernplattform/includes/js/quiz.js"></script> 
    <script src="/lernplattform/includes/js/script.js"></script> 


    <?php include 'footer.php'; ?>