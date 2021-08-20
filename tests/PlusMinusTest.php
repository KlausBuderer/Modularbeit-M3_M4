<?php

use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\PlusMinus;
include 'C:\01_Daten\ABBTS\Semester2\00_Modularbeit\Modularbeit_Release/modularbeit/www/model/lerneinheiten/PlusMinus.php';

class PlusMinusTest extends TestCase{


//Instanzierung PlusMinus
public function testGetInstance()
{
    $plusMinus = new PlusMinus(1);

    $this->assertInstanceOf('Model\Lerneinheit\PlusMinus',$plusMinus,"Objekt nicht erstellt");  

    return $plusMinus;
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeArray()
{
    $plusMinus = new PlusMinus(1);
    $result = $plusMinus->produce();

    $this->assertTrue(sizeof($result) == 99, "Erstellung des Array fehlgeschlagen");
}



}

