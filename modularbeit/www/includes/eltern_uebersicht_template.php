
  <?php
  require_once 'header.php';
  require_once 'navbar_eltern.php';
  require_once 'sidebar_eltern.php';

  $kinder = array();
  $kinder = $_SESSION['kinderListe'];



  ?>
    
            
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="display-1">Elternübersicht</h1>
          
          </div>


<?php
        print_r($kinder);

        foreach ($kinder as $kind) {
       
         echo '<ul class="list-group">';
         echo   ' <li class="list-group-item d-flex justify-content-between">';
         echo       $kind[0];
         echo   ' <div class="dropdown">';
         echo        '<button class="btn btn-outline-secondary d-flex justify-content-center d-md-table mx-auto dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; border-color: transparent;">';
         echo        '<img src="images/three-dots.svg" alt="Menü">';
         echo       ' </button>';
         echo        '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
         echo         ' <li><a class="dropdown-item" href="mediengutschein.php">Mediengutschein</a></li>';
         echo          '<li><a class="dropdown-item" href="lernfortschritt.php">Lernfortschritt</a></li>';
         echo        '</ul>';
         echo    '</div>';
         echo    '</li>';
         
         echo    '</ul>';
          }

  ?>          

            <br>
            <div class="d-grid gap-2">
              <a type="button" href="kind_hinzufuegen.php" class="btn btn-outline-secondary">Kind hinzufügen</a>
            </div>

           





    
<?php require_once 'footer.php'; ?>



