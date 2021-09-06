<?php


$root = "modularbeit/www/model/lerneinheiten/EinXEins.php";


use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\EinXEins;

include  $root;

class EinXEinsTest extends TestCase{


//Instanzierung EinXEins
public function testGetInstance()
{
    $einxeins = new EinXEins(1);

    $this->assertInstanceOf('Model\Lerneinheit\EinXEins',$einxeins,"Objekt nicht erstellt");  

    return $einxeins;
}

//-----------------------------------------------------------------------------------------------------------------------------------

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeArray()
{
    $einxeins = new EinXEins(1);
    $result = $einxeins->produce();

    $this->assertTrue(sizeof($result) == 99, "Erstellung des Array fehlgeschlagen");
}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Prüfe ob die richtige Antworten gleich wie einer der falschen ist
 public function testPruefeDiffAnswers()
{
    $ranges = [9, 14, 19];
    $anzNoDiff = 0;

    $einxeins = new EinXEins(1);


      $factors = $einxeins->createFactors($ranges[random_int(0,2)]); 
      $ans = $einxeins->createCalc($factors);

       //Falls eine Falsche Antwort gleich wie die richtige ist wird plus eins gerechnet
       for ($i=1; $i < 3; $i++) { 
        if ($ans[0] === $ans[$i]) {
            $anzNoDiff++;
        }

        $this->assertEquals(0,$anzNoDiff, "Es wurden " . $anzNoDiff . " gleiche Resultate produziert");

    }
    
} 

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 //Prüfe ob die richtige Antworten gleich wie einer der falschen ist
public function testPruefeAufgabenErstellung()
{
    $einxeins = new EinXEins(1);

    $aufgabe = $einxeins->orderAnswers($ans = [1,2,3,4]);

    $this->assertInstanceOf('Model\Lerneinheit\Aufgabe', $aufgabe, 'Instanzieren von Aufgabe nicht erfolgreich!');

 
}  



}

