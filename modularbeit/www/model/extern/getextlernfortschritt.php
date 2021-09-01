<?php
namespace Model\Lerneinheit;
use Model\Lerneinheit\DbConnection;

include_once '../../model/lerneinheiten/DbConnection.php';

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
    $sql = "SELECT `KK1`.`username` AS `Benutzername`, `KK1`.`fname` AS `Vorname`, `KK1`.`lname` AS `Nachname`, `KK2`.`lerneinheit` AS `Lerneinheit`, `KK2`.`punkteerreicht` AS `Punkte erreicht`, `KK2`.`vorzeitabbruch` AS `Vorzeitiger Abbruch` FROM (`users` `KK1` JOIN `le_lernfortschritt` `KK2` ON (`KK1`.`id` = `KK2`.`userid`))
     WHERE `KK1`.`fname` LIKE '%$fname%' AND `KK1`.`lname` LIKE '%$lname%';";

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