<?php
require_once'../../model/lerneinheiten/dbconnection.php';

class GetLernfortschrittExt{

    public function __construct($fname, $lname)
    {
      $this->vorname = $fname;
      $this->nachname = $fname;
    }

public function getausgabecsv($fname, $lname)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    $row = $result -> fetch_assoc();
    $dsatz=mysqli_fetch_assoc($result);

    echo $fname;
 
    }
}
?>