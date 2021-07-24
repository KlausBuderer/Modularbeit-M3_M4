<?php
require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');
?>

<div class="album py-5 bs-wight">
    <div class="container">

    <h1 class="text-center fw-lighter display-2">Übersicht</h1>
    <hr>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/lernplattform/includes/images/mathe-2.jpg" style="height: 18rem;" class="card-img-top">

                    <div class="card-body">
                    <p class="card-text">Verbessere deine Mathe Skills</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="/lernplattform/includes/mathe_uebersicht_template.php" class="btn btn-sm btn-outline-secondary">Öffnen</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                        
                            <img src="/lernplattform/includes/images/realien.png" style="height: 18rem;" class="card-img-top">
                        
                    <div class="card-body">
                        <p class="card-text">Werde ein Meister oder eine Meisterin in Realien</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Öffnen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                        
                            <img src="/lernplattform/includes/images/deutsch.jpg" style="height: 18rem;" class="card-img-top">
                        
                    <div class="card-body">
                        <p class="card-text">Verbessere dein Deutsch</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Öffnen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                        
                            <img src="/lernplattform/includes/images/englisch.jpg" style="height: 18rem;" class="card-img-top">
                        
                    <div class="card-body">
                        <p class="card-text">Improve your english</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Öffnen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                        
                            <img src="/lernplattform/includes/images/franzoesisch.jpg" style="height: 18rem;" class="card-img-top">
                        
                    <div class="card-body">
                        <p class="card-text">apprendre le français</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Öffnen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                        
                            <img src="/lernplattform/includes/images/lernfortschritt.jpg" style="height: 18rem;" class="card-img-top">
                        
                    <div class="card-body">
                        <p class="card-text">Hier findest du deinen Lernforschritt</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Öffnen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require('footer.php'); ?>