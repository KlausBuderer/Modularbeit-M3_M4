<?php

use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\EinXEins;
include 'app/modularbeit/www/model/lerneinheiten/EinXEins.php';

class EinXEinsTest extends TestCase{


//Instanzierung EinXEins
public function testGetInstance()
{
    $einxeins = new EinXEins(1);

    $this->assertInstanceOf('Model\Lerneinheit\EinXEins',$einxeins,"Objekt nicht erstellt");  

    return $einxeins;
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeArray()
{
    $einxeins = new EinXEins(1);
    $result = $einxeins->produce();

    $this->assertTrue(sizeof($result) == 99, "Erstellung des Array fehlgeschlagen");
}



}

