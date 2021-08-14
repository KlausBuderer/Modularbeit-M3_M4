<?php
require_once '../lerneinheiten/dbconnection.php';

class SetKindKonto {

  public function __construct($kind_id, $eltern_id)
{
    $this->kind_id = $kind_id;
    $this->eltern_id = $eltern_id;
    
}
public function setkindverknuepfung()
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

$sql =  "INSERT INTO le_eltern_kind_matches(id,kind_id,eltern_id) 
  VALUES ('','$this->kind_id','$this->eltern_id');";
  $result = mysqli_query($conn, $sql);
  }
}
?>