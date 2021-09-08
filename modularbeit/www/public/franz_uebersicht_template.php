<?php
require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');
?>

<!-- Englischübersicht -->
<div class="album py-5 bs-wight">
    <div class="container">


        <h1 id="titel" class="text-center fw-lighter display-2">Französisch</h1>
        <hr>

        <form action="/features/kind/lerneinheit_waehlen/lerneinheit_waehlen_controller.php" method="Post">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/franzoesisch_grammaire.jpg" style="height: 18rem;" class="card-img-top">

                        <div class="card-body" id="card1">
                            <p class="card-text">Grammaire</p>
                            <label for="customRange1" class="form-label">niveau</label><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div style="text-align: left;">facile</div>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: center;">moyen</div>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: right;">lourd</div>
                                    </div>
                                </div>
                            </div>
                            <input name="stufe1" value="0" type="range" class="form-range" min="1" max="3" id="1">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="submit" name="einxeins" class="btn btn-sm btn-outline-secondary card-button" disabled data-bs-toggle="button" autocomplete="off">Starten</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">

                        <img src="images/franzoesisch_verbs.jpg" style="height: 18rem;" class="card-img-top">

                        <div class="card-body" id="card2">
                            <p class="card-text">Verbs</p>
                            <label for="customRange1" class="form-label">niveau</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div style="text-align: left;">facile</div>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: center;">moyen</div>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: right;">lourd</div>
                                    </div>
                                </div>
                            </div>
                            <input name="stufe2" value="0" type="range" class="form-range" min="1" max="3" id="2">

                            <div class="btn-group">
                                <button type="submit" name="dreisatz" class="btn btn-sm btn-outline-secondary card-button" disabled data-bs-toggle="button" autocomplete="off">Starten</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card shadow-sm">

                        <img src="images/franzoesisch_orthographe.jpg" style="height: 18rem;" class="card-img-top">

                        <div class="card-body" id="card3">
                            <p class="card-text">Orthographe</p>
                            <label for="customRange1" class="form-label">niveau</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div style="text-align: left;">facile</div>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: center;">moyen</div>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: right;">lourd</div>
                                    </div>
                                </div>
                            </div>
                            <input name="stufe3" value="0" type="range" class="form-range" min="1" max="3" id="3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="submit" name="plus_minus" class="btn btn-sm btn-outline-secondary card-button" disabled data-bs-toggle="button" autocomplete="off">Starten</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>
</div>


<?php require('footer.php'); ?>