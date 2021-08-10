<?php

require_once 'dbconnection.php';

class Guthaben{

private $userId;
private $punkte;
private $guthaben;

public function __construct($userId)
{
    $this->userId = $userId;
    $this->fetchDb();
}

public function setGuthaben($neuGuthaben)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

    $sql =  "UPDATE profiles SET  guthaben= $neuGuthaben WHERE user_id= $this->userId;";
  
    $result = mysqli_query($conn, $sql);
  
}

public function getGuthaben(){

return $this->guthaben;
}

public function getPunkte(){

    return $this->punkte;
}


private function fetchDb(){

    $connection = new DbConnection();
$conn = $connection->buildConnection();

   // Fetch Data from Database
    $sql = "SELECT * from profiles WHERE user_id= $this->userId;";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){

        $this->punkte = $row['punkte'];
        $this->guthaben = $row['guthaben'];

    }

}


}