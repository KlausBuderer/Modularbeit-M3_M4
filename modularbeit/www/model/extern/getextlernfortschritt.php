<?php
require_once'../../model/lerneinheiten/dbconnection.php';

class GetLernfortschrittExt{

    public function __construct($fname, $lname)
    {
      $this->vorname = $fname;
      $this->nachname = $fname;
    }

public function getausgabejson($fname, $lname)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

    if (mysqli_connect_errno())echo "Failed to connect to MySQL: " . mysqli_connect_error();
    $sql = "SELECT * FROM users ";
    // $sql = "SELECT * FROM users WHERE 'fname' LIKE '%{$fname}%' and 'lname' LIKE '%{$lname}%' ";
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
