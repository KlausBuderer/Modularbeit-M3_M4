<?php

namespace Model\Lerneinheit;

class DbConnection
{
private $dbServerName = 'itwisse.mysql.db.hostpoint.ch';
private $dbUserName = 'itwisse_lpf';  
// private $dbServerName = 'localhost';
// private $dbUserName = 'root';
  private $dbPassword = 'P99F-TBtgm2RgujbPVS!';
  private $dbName = 'itwisse_lernplattform';

  // Klasse für den Aufbau einer Verbindung zur Datenbank
  public function buildConnection()
  {
    return $conn = mysqli_connect($this->dbServerName, $this->dbUserName, $this->dbPassword, $this->dbName);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  }
}
