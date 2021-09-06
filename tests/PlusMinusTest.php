<?php


$root = "modularbeit/www/model/lerneinheiten/PlusMinus.php";


use PHPUnit\Framework\TestCase;
use Model\Lerneinheit\PlusMinus;
include_once $root;

class PlusMinusTest extends TestCase{


//Instanzierung PlusMinus
public function testGetInstance()
{
    $plusMinus = new PlusMinus(1);

    $this->assertInstanceOf('Model\Lerneinheit\PlusMinus',$plusMinus,"Objekt nicht erstellt");  

    return $plusMinus;
}

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Pruefung Erstellung der Testaufgabenmenge
public function testPruefeArray()
{
    $plusMinus = new PlusMinus(1);
    $result = $plusMinus->produce();

    $this->assertTrue(sizeof($result) == 99, "Erstellung des Array fehlgeschlagen");
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Prüfe dass keine negatives Resultat erstellt werden kann
public function testPruefeNegativResultat()
{
    $ranges = [9, 14, 19];
    $results = [];
    $anzNegativ = 0;
    $plusMinus = new PlusMinus(1);
    
    //Erstellt 50 Testaufgaben 
    for ($i=0; $i < 50; $i++) { 
        $results = $plusMinus->createFactors($ranges[random_int(0,2)]);
    }

    //Prüft die Resultate und iteriert $anzNegativ bei negativem Resultat
    foreach ($results as $r) {
        if ($r < 0) {
            $anzNegativ++;
        }
    }

    $this->assertEquals(0,$anzNegativ, "Es wurden " . $anzNegativ . " negative Resultate produziert");

}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Prüfe ob 2x2 gerechnet wird => 2x2 darf nicht gerechnet werden, da sonst der Algorithmus der die falschen Antworten generiert fehlschlägt
 public function testPruefeDiffAnswers()
{
    $ranges = [9, 14, 19];

    $plusMinus = new PlusMinus(1);

    for ($i=0; $i < 100; $i++) { 
    
      $factors = $plusMinus->createFactors($ranges[random_int(0,2)]); 
      $ans = $plusMinus->createCalc($factors);

        
    $this->assertNotEquals(4,$ans[1] * $ans[0], "Es wurde 2 x 2 gerechnet" . $ans[0] . "x" . $ans[1]); 
}
} 

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 //Prüfe ob die richtige Antworten gleich wie einer der falschen ist
public function testPruefeAufgabenErstellung()
{
    $plusMinus = new PlusMinus(1);

    $aufgabe = $plusMinus->orderAnswers($ans = [1,2,3,4]);

    $this->assertInstanceOf('Model\Lerneinheit\Aufgabe', $aufgabe, 'Instanzieren von Aufgabe nicht erfolgreich!');

 
}  

}
 
