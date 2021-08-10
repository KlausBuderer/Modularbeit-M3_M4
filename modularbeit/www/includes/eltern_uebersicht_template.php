
  <?php
  require_once 'header.php';
  require_once 'navbar_eltern.php';
  require_once 'sidebar_eltern.php';
  ?>
    
            
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Elternübersicht</h1>
          
          </div>

          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                Kind 1
                <a class= "btn btn-outline-secondary navButton" href="mediengutschein.php">Mediengutschein</a>
                <a class= "btn btn-outline-secondary navButton" href="lernfortschritt.php">Lernfortschritt</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Kind 2
                <span class="badge badge-primary badge-pill">50</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Kind 3
                <span class="badge badge-primary badge-pill">99</span>
            </li>
            </ul> 

            <br>
            <div class="d-grid gap-2">
              <a type="button" href="kind_hinzufuegen.php" class="btn btn-outline-secondary">Kind hinzufügen</a>
            </div>

           





    
<?php require_once 'footer.php'; ?>



