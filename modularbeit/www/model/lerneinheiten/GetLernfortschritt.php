<?php
require_once 'Dbconnection.php';

class GetLernfortschritt{

    private $kindsId;
    private $lernfortschritt = array();

public function __construct($kindsId) {
    $this->kindsId = $kindsId;

    $this->fetchData();

}

public function getLernfortschritt(){
    return $this->lernfortschritt;
}

private function fetchData(){

    //Verbindung zur DB aufbauen
    $connection = new DbConnection();
    $conn = $connection->buildConnection();
    
       // Fetch Data from Database
        $sql = "SELECT * from le_lernfortschritt WHERE userid= $this->kindsId;";
        $result = mysqli_query($conn, $sql);

        $counter = 0;
  
        while($row = mysqli_fetch_assoc($result)){

    
            $this->lernfortschritt[$counter] = array($row['datum'], $row['lerneinheit'], $row['beschreibung'], $row['anzfragengesamt'], $row['anzfragenkorrekt'], $row['vorzeitabbruch'], $row['punkteerreicht']);
              
        $counter++;
        }
    
}


}