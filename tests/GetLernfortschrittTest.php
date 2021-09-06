<?php


$root = "modularbeit/www/model/lerneinheiten/GetLernfortschritt.php";


use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\GetLernfortschritt;

include  $root;

class GetLernfortschrittTest extends TestCase{

//Instanzierung 
public function testGetInstance()
{
    $lernfortschritt = new GetLernfortschritt(1);

    $this->assertInstanceOf('Model\Lerneinheit\GetLernfortschritt',$lernfortschritt,"GetLernfortschritt Objekt nicht erstellt");  

}

//Prüfung ob Mysqli extension geladen ist, falls nicht werden die Tests übersprungen
    protected function setUp():void
{
    if (!extension_loaded('mysqli')) {
        $this->markTestSkipped(
          'The MySQLi extension is not available.'
        );
    }
}
//Pruefung Lesen einer Liste von Lernfortschritten aus der Datenbank
public function testPruefeGetLernfortschritt()
{
    $lernfortschritt = new GetLernfortschritt(1);

    $result = $lernfortschritt->getLernfortschritt();

    $this->assertIsArray($result,"GetLernfortschritt nicht erfolgreich");
}

}