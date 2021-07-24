<?php


class DbConnection{

private $dbServerName = "localhost:3307";
private $dbUserName = "root";
private $dbPassword = "";
private $dbName = "modularbeit";


public function buildConnection()
{
  return $conn = mysqli_connect($this->dbServerName,$this->dbUserName, $this->dbPassword, $this->dbName); 
}


}