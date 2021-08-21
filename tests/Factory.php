<?php


$root = "modularbeit/www/model/lerneinheiten/LerninhaltModel.php";


use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\LerninhaltModel;
include $root;

class FactoryTest extends PHPUnit\Framework\TestCase {



    

    // Instanzierung
public function testGetInstance()
{
    $lerneinheit = new LerninhaltModel(1,'einxeins','mathe');

    $this->assertInstanceOf('LerninhaltModul',$lerneinheit, "Objekterstellung fehlgeschlagen");

}

 //Punkteberechnung Stufe 2
public function testgetEinXEins()
{
    $lerneinheit = new LerninhaltModel(1,'einxeins','mathe');
    $result = $lerneinheit->createLerninhalt();

    $this->assertTrue(sizeof($result)==99,'Erstellung der Lerneinheit fehlgeschlagen');

}


 //Punkteberechnung Stufe 2
 public function testgetPlusMinus()
 {
     $lerneinheit = new LerninhaltModel(1,'plus_minus','mathe');
     $result = $lerneinheit->createLerninhalt();
 
     $this->assertTrue(sizeof($result)==99,'Erstellung der Lerneinheit fehlgeschlagen');
 
 }
  
 

}