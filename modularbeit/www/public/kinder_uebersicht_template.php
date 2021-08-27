<?php
require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');

?>

<!-- Kinderübersicht

Hauptbild wenn sich ein Kind anmeldet

-->

<div class="album py-5 bs-wight">
    <div class="container">

    <!-- Titel -->
        <h1 id="titel" class="text-center fw-lighter display-2">Übersicht</h1>
        <hr>
    <!-- Mathematik -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/public/images/mathematik_hauptseite.jpg" style="height: 18rem;" class="card-img-top">

                    <div class="card-body"  id="card1">
                        <p class="card-text">Verbessere deine Mathe Skills</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/public/mathe_uebersicht_template.php" class="btn btn-sm btn-outline-secondary">Öffnen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Realien -->
            <div class="col">
                <div class="card shadow-sm">

                    <img src="/public/images/realien.png" style="height: 18rem;" class="card-img-top">

                    <div class="card-body" id="card2">
                        <p class="card-text">Werde ein Meister oder eine Meisterin in Realien</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/public/realien_uebersicht_template.php" class="btn btn-sm btn-outline-secondary">Öffnen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Deutsch -->
            <div class="col">
                <div class="card shadow-sm">

                    <img src="/public/images/deutsch.jpg" style="height: 18rem;" class="card-img-top">

                    <div class="card-body" id="card3">
                        <p class="card-text">Verbessere dein Deutsch</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/public/deutsch_uebersicht_template.php" class="btn btn-sm btn-outline-secondary">Öffnen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Englisch -->
            <div class="col">
                <div class="card shadow-sm">

                    <img src="/public/images/englisch.jpg" style="height: 18rem;" class="card-img-top">

                    <div class="card-body" id="card1">
                        <p class="card-text">Improve your english</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/public/englisch_uebersicht_template.php" class="btn btn-sm btn-outline-secondary">Öffnen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Französisch -->
            <div class="col">
                <div class="card shadow-sm">

                    <img src="/public/images/franzoesisch.jpg" style="height: 18rem;" class="card-img-top">

                    <div class="card-body" id="card2">
                        <p class="card-text">apprendre le français</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Öffnen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Lernfortschritt -->
            <div class="col">
                <div class="card shadow-sm">

                    <img src="/public/images/lernfortschritt.jpg" style="height: 18rem;" class="card-img-top">

                    <div class="card-body" id="card3">
                        <p class="card-text">Hier findest du deinen Lernforschritt</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" class="btn btn-sm btn-outline-secondary" href="/features/kind/kinder_guthaben/guthaben_controller.php">Öffnen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require('footer.php'); ?>