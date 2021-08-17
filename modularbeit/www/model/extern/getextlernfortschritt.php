<?php
require_once'../../model/lerneinheiten/dbconnection.php';

class GetLernfortschrittExt{

    public function __construct($fname, $lname)
    {
      $this->fname = $fname;
      $this->lname = $lname;
    }

public function getausgabejson($fname, $lname)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

    if (mysqli_connect_errno())echo "Failed to connect to MySQL: " . mysqli_connect_error();
    $sql = "SELECT `KK1`.`username` AS `Benutzername`, `KK1`.`fname` AS `Vorname`, `KK1`.`lname` AS `Nachname`, `KK2`.`lerneinheit` AS `Lerneinheit` FROM (`users` `KK1` JOIN `le_lernfortschritt` `KK2` ON (`KK1`.`id` = `KK2`.`userid`))
     WHERE `KK1`.`fname` LIKE '%$fname%' OR `KK1`.`lname` LIKE '%$lname%';";

    $result = mysqli_query($conn, $sql);

    // $row = $result -> fetch_assoc();
    // $dsatz=mysqli_fetch_assoc($result);

    $array = array();
    while($row=mysqli_fetch_assoc($result)){
        $array[] = $row;
        }
echo json_encode($array);
    }
}
?>