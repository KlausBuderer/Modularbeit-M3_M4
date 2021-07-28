<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

  $lerneinheit = $this->lerneinheit;
  $lerninhalt = $this->lerninhalt;
  $modul = $this->modul;
  $stufe = $this->stufe;
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button id="abbrechen" class="btn btn-primary me-md-2" type="button">X</button>
        </div>
        <h2>Frage <span id="qno"></span></h2>
        <p id="question_text">...?</p>
        <div class="row">
          <div class="col-md-6"><p><button id="answer_a_btn" class="answer btn btn-primary btn-lg w-100 antwortButton" role="button">A: </A:blank><span id="answer_a">!</span></button></p></div>
          <div class="col-md-6"><p><button id="answer_c_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">B: <span id="answer_b">.</span></button></p></div>
        </div>
        <div class="row">
          <div class="col-md-6"><p><button id="answer_b_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">C: <span id="answer_c">?</span></button></p></div>
          <div class="col-md-6"><p><button id="answer_d_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">D: <span id="answer_d">;</span></button></p></div>
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
        <h1>Lerneinheit vorbei!</h1>
        <p>Du hast: <span id="endpoints">0</span> von <span id="possiblepoints">0</span> richtig beantwortet!</p>
        <p><button  class="restart btn btn-primary btn-lg" role="button">Nochmal starten</button></p>
          <form action="/lernplattform/features/kind/lernfortschritt_speichern/lernfortschritt_speichern_controller.php" method="post">
            <input type="text" name="anzRichtig" id="anzRichtig" style="display:none;" value="test">
            <input type="text" name="anzFragen" id="anzFragen" style="display:none;" value="test">
            <input type="text" name="abbruch" id="abbruch" style="display:none;" value="test">
            <input type="text" name="stufe" id="stufe" style="display:none;" value="1">
            <input type="text" name="lerneinheit" id="lerneinheit" style="display:none;" value="<?php echo $modul;?>">
            <input type="text" name="lernmodul" id="lernmodul" style="display:none;" value="<?php echo $lerninhalt;?>">
            <p><button type="submit" name="beenden" class="end btn btn-primary btn-lg">Beenden</button></p>
          </form>
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