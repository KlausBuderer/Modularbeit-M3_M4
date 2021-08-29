<?php

namespace Model\Lerneinheit;

class DbConnection
{
// Remote   private $dbServerName = 'itwisse.mysql.db.hostpoint.ch';
  private $dbServerName = '172.0.0.1';
  private $dbUserName = 'itwisse_lpf';
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
