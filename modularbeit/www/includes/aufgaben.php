<?php

require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

$userId = $user->data()->id;
$lerneinheit = $_SESSION['lerneinheit'];
$lerneinheit = json_encode($lerneinheit);
$lerninhalt = $_POST['lerninhalt'];
$modul = $_POST['modul'];
$stufe = $_POST['stufe'];
?>

<!--
Aufgabenseite

In diesem File werden die Aufgaben ausgegeben und bearbeitet.
-->

<div class="container">

<!-- Titel -->
  <h1 class="text-center fw-lighter display-2">Aufgaben</h1>
  <hr>
  
<!-- Startbild der Aufgaben -->
  <div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
    <h1>Herzlich Willkommen!</h1>
    <p></p>
    <p><button class="start btn btn-primary btn-lg" role="button">Jetzt starten</button></p>
  </div>

<!-- Aufgabenbild -->
  <div id="question" class="question container-fluid bg-light text-dark p-5" style="display:none;">
    <div class="d-grid gap-2 d-xs-flex justify-content-xs-end d-md-flex justify-content-md-end">
      <button id="abbrechen" class="btn-close" type="button"></button>
    </div>
    <h2>Frage <span id="qno"></span></h2>
    <p id="question_text">...?</p>
    <div class="row">
      <div class="col-md-6">
        <p><button id="answer_a_btn" class="answer btn btn-primary btn-lg w-100 antwortButton" role="button">A: </A:blank><span id="answer_a">!</span></button></p>
      </div>
      <div class="col-md-6">
        <p><button id="answer_c_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">B: <span id="answer_b">.</span></button></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p><button id="answer_b_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">C: <span id="answer_c">?</span></button></p>
      </div>
      <div class="col-md-6">
        <p><button id="answer_d_btn" class="answer btn btn-default btn-lg w-100 antwortButton" role="button">D: <span id="answer_d">;</span></button></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <p><button id="answer_commit_btn" class="btn btn-primary btn-lg btn-block" role="button" style="display:none;"><span id="commit_text">Antworten</span></button></p>
        <p><button id="continue_btn" class="btn btn-primary btn-lg btn-block" role="button" style="display:none;"><span id="commit_text">Weiter</span></button></p>
      </div>
    </div>
  </div>

<!-- Augabenendebild mit Resultatsanzeige -->
  <div id="over" class="container-fluid bg-light text-dark p-5 quiz_end" style="display: none;">
    <h1>Lerneinheit vorbei!</h1>
    <p>Du hast: <span id="endpoints">0</span> von <span id="possiblepoints">0</span> richtig beantwortet!</p>
    <p><button class="restart btn btn-primary btn-lg" role="button">Nochmal starten</button></p>
    <!-- Speicherung des Ergebnis -->
    <form action="/features/kind/lernfortschritt_speichern/lernfortschritt_speichern_controller.php" method="post">
      <input type="text" name="anzRichtig" id="anzRichtig" style="display:none;" value="test">
      <input type="text" name="anzFragen" id="anzFragen" style="display:none;" value="test">
      <input type="text" name="abbruch" id="abbruch" style="display:none;" value="test">
      <input type="text" name="stufe" id="stufe" style="display:none;" value="<?php echo $stufe; ?>">
      <input type="text" name="lerneinheit" id="lerneinheit" style="display:none;" value="<?php echo $modul; ?>">
      <input type="text" name="lernmodul" id="lernmodul" style="display:none;" value="<?php echo $lerninhalt; ?>">
      <input type="text" name="userId" id="userId" style="display:none;" value="<?php echo $userId; ?>">
      <p><button type="submit" name="beenden" class="end btn btn-primary btn-lg">Beenden</button></p>
    </form>
  </div>
</div>

<hr>
<!-- Fortschrittsanzeige (Rennbahn) -->
<div class="container">

  <div class="container-fluid bg-light text-dark p-5 rennbahn" id="rennbahn">
    <span class="display-6 ziel">Ziel</span>
    <span class="display-6 rennbahnTextSpieler"><?php echo $user->data()->username; ?></span>
    <img id="Spieler" class="fortschrittSpieler" src="/includes/images/spieler_pony.png">
    <br>
    <hr>
    <span class="display-6 rennbahnTextComputer">Computer</span>
    <img id="Computer" class="fortschrittComputer" src="/includes/images/spieler_gokart.png">

  </div>
</div>

<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>

<!-- Aufgabeübergabe von Server an Javascript -->
<script type="text/javascript">
  var data = (<?php echo $lerneinheit; ?>);
</script>

<!-- Aufgabenscript -->
<script src="/includes/js/aufgaben.js"></script>
<script src="/includes/js/script.js"></script>


<?php include 'footer.php'; ?>