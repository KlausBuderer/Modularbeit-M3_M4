<?php


$root = "modularbeit/www/model/lerneinheiten/DbConnection.php";


use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\DbConnection;

include  $root;

class DbConnectionTest extends TestCase{


    //Prüfung ob Mysqli extension geladen ist, falls nicht werden die Tests übersprungen
    protected function setUp():void
    {
        if (!extension_loaded('mysqli')) {
            $this->markTestSkipped(
              'The MySQLi extension is not available.'
            );
        }
    }

//Instanzierung 
public function testGetInstance()
{
    $con = new DbConnection();

    $this->assertInstanceOf('Model\Lerneinheit\DbConnection',$con,"DbConnection Objekt nicht erstellt");  

}

//Pruefung Erstellung einer Verbindung
public function testPruefeConnection()
{
    $con = new DbConnection();

    $result = $con->buildConnection();

    $this->assertIsNotString($con, 'Verbindungsfehler zur Datenbank');
}

}
