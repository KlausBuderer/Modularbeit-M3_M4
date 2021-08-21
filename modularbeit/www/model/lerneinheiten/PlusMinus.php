<?php
namespace Model\Lerneinheit;

include_once "Produceble.php";
include_once "Aufgabe.php"; 
use Produceble;
use Model\Lerneinheit\Aufgabe;

class PlusMinus implements Produceble{

private $stufe;
private $range;


public function __construct($stufe)
{
    $this->stufe = $stufe;

    switch ($stufe) {
        case 1:
            $this->range = 9;
            break;
        case 2:
            $this->range = 14;
            break;
        case 3:
            $this->range = 19;
            break;
        }

}

public function produce()
{
return $this->getAufgaben();
}

private function getAufgaben(){
    $lerninhalt = [] ;

    for ($i=0; $i < 99; $i++) { 
       
        $aufgabe = $this->createQuestion();
        $lerninhalt[$i] = $aufgabe->getEncoded();

    }

    return $lerninhalt;
}

private function createQuestion(){

    $question = "";
    $right = "";

    $ans = ["","","",""];
    $operators = ["+","-"];
    $operator = $operators[random_int(0,1)];


    $factor1 = random_int(2,$this->range);
    $factor2 = random_int($factor1,$this->range);

    if($operator == '+'){
    $result = $factor1 + $factor2 . "";
    $wrong1 = ($factor1 + 1) + $factor2 . "";
    $wrong2 = ($factor2 - 1) + $factor1 . "";
    $wrong3 = $factor1  * $factor2 . "";


    }else{
    $result = $factor2 - $factor1 . "";
    $wrong1 = ($factor2 + 1) - $factor1 . "";
    $wrong2 = ($factor2 - 1) - $factor1 . "";
    $wrong3 = $factor1  + 2 + $factor2 . "";


    }


    //Zufällige Plazierung der richtigen Antwort
    $rightPlacement = random_int(0,3);
    $ans[$rightPlacement] = $result;

    //Mappen der richtigen Antwort
    switch ($rightPlacement) {
        case '0':
          
            $right = "A";
            break;
        case '1':
            
            $right = "B";
            break;
        case '2':
            
            $right = "C";
            break;
        case '3':
           
            $right = "D";
            break;
        default:
           
            break;
    }
    
    // Schreibe die Aufgabe
    $question = $factor2 . ' ' . $operator . ' ' . $factor1;

    //Platziere die falschen Antworten
    if ($ans[0] == "") {
        $ans[0] = $wrong1;
    }elseif ($ans[1] == "") {
       $ans[1] = $wrong1;
    }elseif ($ans[2] == "") {
        $ans[2] = $wrong1;
      
    }else{
        $ans[3] = $wrong1;
    }
    
    if ($ans[0] == "") {
        $ans[0] = $wrong2;
    }elseif ($ans[1] == "") {
       $ans[1] = $wrong2;
    }elseif ($ans[2] == "") {
        $ans[2] = $wrong2;
       
    }else{
        $ans[3] = $wrong2;
    }

    if ($ans[0] == "") {
        $ans[0] = $wrong3;
    }elseif ($ans[1] == "") {
       $ans[1] = $wrong3;
    }elseif ($ans[2] == "") {
        $ans[2] = $wrong3;
       
    }else{
        $ans[3] = $wrong3;
    }



    return new Aufgabe(0, $question, $right, $ans[0], $ans[1],  $ans[2],  $ans[3], $this->stufe);
}

}