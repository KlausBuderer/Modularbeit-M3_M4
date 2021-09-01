<?php

require_once 'header.php';
require_once 'navbar_eltern.php';
require_once 'sidebar_eltern.php';


$kindsname = $_POST['kindsname'];
$kindsId = $_POST['kindsId'];
$gutscheine = $_POST['guthaben'];
$punkte = $_POST['punkte'];



?>

<!-- Mediengutscheinverwaltung -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="chartjs-size-monitor">
        <div class="chartjs-size-monitor-expand">
            <div class=""></div>
        </div>
        <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
        </div>
    </div>
    <!-- Titel -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="display-1">Mediengutschein Verwaltung</h1>
    </div>

    <div class="container">
        <br>
        <br>

        <div id="start_screen" class="container-fluid bg-light text-dark p-5 quiz_start">
            <h1>Hallo <?= $user->data()->username; ?></h1>
            <h2>Hier können Sie die Mediengutscheine von <?= $kindsname; ?> verwalten.</h2>

            <form action="" method="POST">

                <!-- Modal Mediengutschein PDF Drucken-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Mediengutschein erstellen</h5>
                                <button type="button" class="btn-close" id="mg-speichern" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Für wieviele Stunden soll ein Mediengutschein ausgestellt werden?
                            </div>
                            <div class="input-group input-group-sm mb-3 input-fenster">
                                <div class="h6" style="margin-right: 2rem;">Stunden</div>
                                <input id="h" type="number" name="stundenPdf" class="form-control" min="1" max="<?= $gutscheine ?>">
                                <input type="hidden" name="kindsname" value=<?= $kindsname ?>>
                                <input type="hidden" name="kindsId" value=<?= $kindsId ?>>
                                <input type="hidden" name="guthaben" value=<?= $gutscheine ?>>
                                <input type="hidden" name="punkte" value=<?= $punkte ?>>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                <button type="submit" name="pdf" class="btn btn-outline-secondary submit-button" onclick="printPdf();">Drucken</button>
                                <a id="pdf" href="pdfGutschein.php?h=stunden" target="_blank"></a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Mediengutschein hinzufügen-->
                <div class="modal fade" id="hinzu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Mediengutschein Hinzufügen</h5>
                                <button type="button" class="btn-close" id="mg-speichern" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Wieviele Stunden sollen hinzugefügt werden?

                            </div>
                            <div class="input-group input-group-sm mb-3 input-fenster">
                                <label for="customRange2" class="form-label">Stunden</label>
                                <input type="number" name="stundenHinzu" class="form-control" min="1">

                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                <button type="submit" name="hinzu" class="btn btn-outline-secondary submit-button">Hinzufügen</button>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="d-flex align-items-center p-3 my-3 text-black rounded shadow-sm">
                    <div class="lh-1">
                        <h1 class="h6 mb-0 d-inline-block text-black lh-1">Mediengutscheine: <p class="mg-verwaltung"><?= $gutscheine; ?> Stunden </p>

                        </h1>
                    </div>
                </div>

                <div class="d-flex align-items-center p-3 my-3 text-black rounded shadow-sm">
                    <div class="lh-1">
                        <h1 class="h6 mb-0 text-black lh-1">Punkte: <p class="mg-verwaltung mg-verwaltung-punkte-text"><?= $punkte; ?> Punkte </p>
                            <p class="mg-verwaltung">Es fehlen noch <?= 100 - $punkte ?> Punkte bis zum nächsten Gutschein </p>
                        </h1>

                    </div>
                </div>

                <div class="d-flex align-items-center p-3 my-3 text-black rounded shadow-sm">
                    <div class="lh-1">

                        <div class="d-grid gap-2 d-md-flex mx-auto">
                            <p class="h6" style="margin-right: 3rem;">Was möchten Sie tun?</p>
                            <button class="btn btn-secondary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Gutschein erstellen</button>
                            <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#hinzu">Guthaben hinzufügen</button>
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <a type="button" href="eltern_uebersicht_template.php" class="btn btn-outline-secondary back-button">Zurück</a>
    </div>

    <br>
    </div>




    </div>

    <?php require_once 'footer.php';
    require_once '../features/eltern/set_guthaben/SetGuthabenController.php';
    require_once '../features/eltern/druckePdf/druckeController.php';

    if (isset($_POST["hinzu"])) {
        $stunden = $_POST["stundenHinzu"];
        $kindsId = $_POST['kindsId'];
        $kindsname = $_POST['kindsname'];
        $guthaben = $_POST['guthaben'];
        $punkte = $_POST['punkte'];

        guthabenHinzufuegen($kindsId, $guthaben + $stunden, $kindsname, $user->data()->id, $punkte);

        unset($_POST['hinzu']);
    }

    if (isset($_POST["pdf"])) {
        $stunden = $_POST["stundenPdf"];
        $kindsId = $_POST['kindsId'];
        $kindsname = $_POST['kindsname'];
        $guthaben = $_POST['guthaben'];
        $punkte = $_POST['punkte'];

        gutscheinDrucken($kindsId, $stunden, $guthaben, $punkte, $kindsname, $user->data()->id);

        unset($_POST['pdf']);
    }

    function gutscheinDrucken($kindsId, $stunden, $guthaben, $punkte, $kindsname, $userid)
    {
        new DruckePdf($kindsname, $stunden, $guthaben, $punkte, $kindsId,  $userid);
    }

    function guthabenHinzufuegen($kindsId, $neuGuthaben, $kindsname, $userid, $punkte)
    {
        new SetGuthabenController($kindsname, $kindsId, $neuGuthaben, $userid, $punkte);
    }


    ?>
    <script src="/public/js/script.js"></script>
    <script src="/public/js/mg_verwaltung.js"></script>