<?php
require_once('header.php');
require_once('navbar_login.php');
require_once('sidebar.php');
?>
    <div class="album py-5 bs-wight">
        <div class="container">


        <h1 class="text-center fw-lighter display-2">Realien</h1>
        <hr>

            <form action="" method="Post">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="images/realien.png" style="height: 18rem;" class="card-img-top">

                                <div class="card-body">
                                    <p class="card-text">Hauptstädte Länder</p>
                                        <label for="customRange1" class="form-label">Stufe</label><br>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                <div style="text-align: left;">Einfach</div>
                                                </div>
                                                <div class="col">
                                                 <div style="text-align: center;">Mittel</div>
                                                </div>
                                                <div class="col">
                                                <div style="text-align: right;">Schwierig</div>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="stufe" value="0" type="range" class="form-range" min="1" max="3" id="1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <button type="submit" name="hauptstaedte_laender"  class="btn btn-sm btn-outline-secondary">Starten</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                    
                                        <img src="images/mathe-2.jpg" style="height: 18rem;" class="card-img-top">
                                    
                                <div class="card-body">
                                    <p class="card-text">Schweiz</p>
                                    <label for="customRange1" class="form-label">Stufe</label>
                                    <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                <div style="text-align: left;">Einfach</div>
                                                </div>
                                                <div class="col">
                                                 <div style="text-align: center;">Mittel</div>
                                                </div>
                                                <div class="col">
                                                <div style="text-align: right;">Schwierig</div>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="stufe2" value="0" type="range" class="form-range" min="1" max="3" id="2">
                                
                                        <div class="btn-group">
                                        <button type="submit" name="schweiz" class="btn btn-sm btn-outline-secondary">Starten</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        <div class="col">
                            <div class="card shadow-sm">
                                    
                                        <img src="images/mathe-2.jpg" style="height: 18rem;" class="card-img-top">
                                    
                                <div class="card-body">
                                    <p class="card-text">Tiere</p>
                                    <label for="customRange1" class="form-label">Stufe</label>
                                    <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                <div style="text-align: left;">Einfach</div>
                                                </div>
                                                <div class="col">
                                                 <div style="text-align: center;">Mittel</div>
                                                </div>
                                                <div class="col">
                                                <div style="text-align: right;">Schwierig</div>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="stufe3" value="0" type="range" class="form-range" min="1" max="3" id="3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <button type="submit" name="tiere" class="btn btn-sm btn-outline-secondary">Starten</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                </div>
            </form>
        </div>
    </div>


    <?php require('footer.php'); 

require_once '../features/kind/lerneinheit_waehlen/lerneinheit_waehlen_controller.php';

 if(isset($_POST["hauptstaedte_laender"])){
    $lerninhalt = "hauptstaedte_laender";
    $stufe = $_POST["stufe"];
    $modul = "realien";
    getAufgaben($lerninhalt, $stufe, $modul);
    unset($_POST['hauptstaedte_laender']);
}

if(isset($_POST["schweiz"])){
    $lerninhalt = "schweiz";
    $stufe = $_POST["stufe2"];
    $modul = "realien";
    getAufgaben($lerninhalt, $stufe, $modul);
    unset($_POST['schweiz']);
}

if(isset($_POST["tiere"])){
    $lerninhalt = "tiere";
    $stufe = $_POST["stufe3"];
    $modul = "realien";
    getAufgaben($lerninhalt, $stufe, $modul);
    unset($_POST['tiere']);
}



function getAufgaben($lerninhalt, $stufe, $modul)
{
   $aufgabe = new Lerninhalt();
    $aufgabe->setModul($lerninhalt, $stufe, $modul); 
}


?>