<?php

require_once 'header.php';
require_once 'navbar_eltern.php';
require_once 'sidebar_eltern.php';


$kindsname = $_POST['kindsname'];
$kindsId = $_POST['kindsId'];
$gutscheine = $_POST['guthaben'];
$punkte = $_POST['punkte'];

?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="display-1">Mediengutschein Verwaltung</h1>
</div>

<div class="container">
      <br>
<br>

<div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
        <h1>Hallo <?= $user->data()->username; ?></h1>
        <h2>Hier können Sie die Mediengutscheine von <?= $kindsname; ?> verwalten.</h2>


        
            <div class="d-flex align-items-center p-3 my-3 text-black rounded shadow-sm">
                <div class="lh-1">
                <h1 class="h6 mb-0 text-black lh-1">Mediengutscheine: </h1>
                <form class="row g-3 input-fenster" action="" method="POST">
                    <div class="col-auto">
                        <input type="number" id="gutscheinInput" class="form-control" name="neuGuthaben" value='<?= $gutscheine ?>'>
                    </div>
                    <div class="col-auto">
                       <span class="h7">Stunden</span>
                    </div>
                    <div class="col-auto">
                        
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Speichern
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Mediengutschein verwalten</h5>
                                    <button type="button" class="btn-close" id="mg-speichern" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Sind Sie sicher, dass Sie die Mediengutscheine verändern möchten?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                    <button type="submit" name="speichern" class="btn btn-outline-secondary submit-button">Speichern</button>
                                </div>
                                </div>
                            </div>
                            </div>

                    </div>
                </form>
                </div>
            </div>
       

        <div class="d-flex align-items-center p-3 my-3 text-black rounded shadow-sm">
            <div class="lh-1">
            <h1 class="h6 mb-0 text-black lh-1">Punkte: <p class="mg-verwaltung"><?= $punkte; ?> Punkte </p> <p class="mg-verwaltung">Es fehlen noch <?= 100-$punkte?> Punkte bis zum nächsten Gutschein </p> </h1> 
        
            </div>
        </div>


       

        <br>


</div>


<a type="button" href="eltern_uebersicht_template.php" class="btn btn-outline-secondary back-button">Zurück</a>

</div>

<?php require_once 'footer.php';

require_once '../features/eltern/set_guthaben/SetGuthabenController.php';

if(isset($_POST["speichern"])){
    $neuGuthaben = $_POST["neuGuthaben"];
    setGuthaben($kindsId,$neuGuthaben,$kindsname, $user->data()->id);
    unset($_POST['speichern']);
}

function setGuthaben($kindsId, $neuGuthaben, $kindsname, $userid)
{
    new SetGuthabenController($kindsname, $kindsId, $neuGuthaben, $userid);
    
}



?>
<script src="/includes/js/script.js"></script> 
