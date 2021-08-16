<?php

require_once 'header.php';
require_once 'navbar_eltern.php';
require_once 'sidebar_eltern.php';

$lernfortschritt = $_SESSION['lernfortschrittTbl'];
$kindsname = $_POST['kindsname'];

?>

<!-- <link rel="stylesheet" href="includes/datatables/DataTables-1.10.25/css/dataTables.bootstrap5.min.css">  
<script src= '/includes/js/jquery-3.5.1.min.js'> </script> 
<script src= '/includes/js/jquery.dataTables.min.js'> </script> 
<script src= '/includes/datatables/DataTables-1.10.25/js/dataTables.bootstrap5.min.js'> </script> 
        
<script>
    $(document).ready(function() {
        $('#lernfortschritt').DataTable();
     } );

    </script> -->


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="display-1">Lernfortschritt</h1>
</div>

<h1>Lernfortschritt von <?= $kindsname?></h1>
<br>


<table class= "table table-bordered" id="lernfortschritt">
  <thead>
    <tr>
      <th>Datum</th>
      <th>Lerneinheit</th>
      <th>Lernmodul</th>
      <th>Fragen</th>
      <th>Richtige</th>
      <th>Abbruch</th>
      <th>Punkte</th>
    </tr>
  </thead>
  <tbody>
    <?php

if(sizeof($lernfortschritt) > 0){

    foreach ($lernfortschritt as $einheit) {
      echo  "<tr>
      <td>$einheit[0]</td>
      <td>$einheit[1]</td>
      <td>$einheit[2]</td>
      <td>$einheit[3]</td>
      <td>$einheit[4]</td>
      <td>$einheit[5]</td>
      <td>$einheit[6]</td>
      </tr>\n";  
       
   }

}else{
    echo 'Es sind noch keine Aufgaben gelöst worden!';
} ?>
  </tbody>
</table>




<a type="button" href="eltern_uebersicht_template.php" class="btn btn-outline-secondary">Zurück</a>


<?php require_once 'footer.php'?>