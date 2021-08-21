<?php


$root = "modularbeit/www/model/lerneinheiten/SetLernfortschritt.php";


use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\SetLernfortschritt;
include $root;

class SetLernfortschrittTest extends PHPUnit\Framework\TestCase {



    

    // Punkteberechnung Stufe 1
public function testCalcPunkte1()
{
    $setLernfortschritt = new SetLernfortschritt("","","","","","",2);
    $result = $setLernfortschritt->calcPunkte(10, 1);

$this->assertEquals(5,$result, "Punkteberechnung fehlgeschlagen");

}
 //Punkteberechnung Stufe 2
public function testCalcPunkte2()
{
    $setLernfortschritt = new SetLernfortschritt("","","","","","",2);
    $result = $setLernfortschritt->calcPunkte(10, 2);

$this->assertEquals(10,$result, "Punkteberechnung fehlgeschlagen");

}
 //Punkteberechnung Stufe 3
public function testCalcPunkte3()
{
    $setLernfortschritt = new SetLernfortschritt("","","","","","",2);
    $result = $setLernfortschritt->calcPunkte(10, 3);

$this->assertEquals(15,$result, "Punkteberechnung fehlgeschlagen");

}
    
public function testLerneinheitErfolgreichTrue()
{
    $setLernfortschritt = new SetLernfortschritt("","","","","","",2);
    $result = $setLernfortschritt->lerneinheitErfolgreich(10);

 $this->assertTrue($result, "Erfolgsprüfung fehlgeschlagen");

}

public function testLerneinheitErfolgreichFalse()
{
    $setLernfortschritt = new SetLernfortschritt("","","","","","",2);
    $result = $setLernfortschritt->lerneinheitErfolgreich(8);

 $this->assertFalse($result, "Erfolgsprüfung fehlgeschlagen");

}

}