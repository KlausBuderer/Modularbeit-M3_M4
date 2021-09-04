
<?php


 $root = "modularbeit/www/model/lerneinheiten/LerninhaltModel.php";

use Model\Lerneinheit\LerninhaltModel;
use PHPUnit\Framework\TestCase;
 
include $root;

class FactoryTest extends TestCase{


//Instanzierung Lerninhalt
public function testGetInstance()
{
    $lerninhaltModel = new LerninhaltModel(1,'einxeins','mathe');

    $this->assertInstanceOf('Model\Lerneinheit\LerninhaltModel',$lerninhaltModel,"Objekt nicht erstellt");  
}



//-------------------------------------------------------------------------------------------------------------------------------------
/* In dieser Testklasse wird die Erstellung der Lerneinheiten, die mit einem Factory-Pattern erstellt werden, getestet. Es wird auf die
minimal benötigte Anzahl Aufgagen getestet und das in allen Stufen. 

Wird eine neue Lerneinheit hinzugefügt so soll ein neuer Testblock erstellt werden, damit die Erstellung der Aufgaben geprüft wird und 
die Funktionsfähigkeit der Applikation gewährleistet ist.*/
//--------------------------------------------------------------------------------------------------------------------------------------

//Ein x Eins in allen Stufen


//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeEinXEins1()
{
    $lerninhaltModel = new LerninhaltModel(1,'einxeins','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt)== 99, "Erstellung einxeins fehlgeschlagen");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeEinXEins2()
{
    $lerninhaltModel = new LerninhaltModel(2,'einxeins','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt)== 99, "Erstellung einxeins fehlgeschlagen");
}


//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeEinXEins3()
{
    $lerninhaltModel = new LerninhaltModel(3,'einxeins','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt)== 99, "Erstellung einxeins fehlgeschlagen");
}


//---------------------------------------------------------------------------------------------------------------------------------------------

//Plus Minus in allen Stufen

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefePlusMinus1()
{
    $lerninhaltModel = new LerninhaltModel(1,'plus_minus','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt)== 99, "Erstellung plusminus fehlgeschlagen");

}


//Pruefung Erstellung der Testaufgabenmenge
public function testPruefePlusMinus2()
{
    $lerninhaltModel = new LerninhaltModel(2,'plus_minus','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt)== 99, "Erstellung plusminus fehlgeschlagen");

}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefePlusMinus3()
{
    $lerninhaltModel = new LerninhaltModel(3,'plus_minus','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt)== 99, "Erstellung plusminus fehlgeschlagen");

}

//-----------------------------------------------------------------------------------------------------------------------------------------------

protected function setUp():void
{
    if (!extension_loaded('mysqli')) {
        $this->markTestSkipped(
          'The MySQLi extension is not available.'
        );
    }
}

//Dreisatz in allen Stufen

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeDreisatz1()
{
    $lerninhaltModel = new LerninhaltModel(1,'dreisatz','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung dreisatz fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeDreisatz2()
{
    $lerninhaltModel = new LerninhaltModel(2,'dreisatz','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung dreisatz fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeDreisatz3()
{
    $lerninhaltModel = new LerninhaltModel(3,'dreisatz','mathe');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung dreisatz fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//-----------------------------------------------------------------------------------------------------------------------------------------------

//Schweiz in allen Stufen

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeSchweiz1()
{
    $lerninhaltModel = new LerninhaltModel(2,'schweiz','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung schweiz fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeSchweiz2()
{
    $lerninhaltModel = new LerninhaltModel(2,'schweiz','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung schweiz fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}


//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeSchweiz3()
{
    $lerninhaltModel = new LerninhaltModel(3,'schweiz','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung schweiz fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//-----------------------------------------------------------------------------------------------------------------------------------------------

//Hauptstaedte und Laender in allen Stufen

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeHauptstaedte1()
{
    $lerninhaltModel = new LerninhaltModel(1,'hauptstaedte_laender','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung hauptstaedte_laender fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeHauptstaedte2()
{
    $lerninhaltModel = new LerninhaltModel(2,'hauptstaedte_laender','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung hauptstaedte_laender fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}


//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeHauptstaedte3()
{
    $lerninhaltModel = new LerninhaltModel(3,'hauptstaedte_laender','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung hauptstaedte_laender fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//-----------------------------------------------------------------------------------------------------------------------------------------------

//Tiere in allen Stufen

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeTiere1()
{
    $lerninhaltModel = new LerninhaltModel(1,'tiere','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung hauptstaedte_laender fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeTiere2()
{
    $lerninhaltModel = new LerninhaltModel(2,'tiere','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung hauptstaedte_laender fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeTiere3()
{
    $lerninhaltModel = new LerninhaltModel(3,'tiere','realien');
    $lerninhalt = $lerninhaltModel->createLerninhalt();

    $this->assertTrue(sizeof($lerninhalt) > 19, "Erstellung hauptstaedte_laender fehlgeschlagen es sind " . sizeof($lerninhalt) . " Aufgaben erstellt worden!");
}


//-----------------------------------------------------------------------------------------------------------------------------------------------

}
