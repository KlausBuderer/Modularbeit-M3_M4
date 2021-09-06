<?php

namespace Model\Lerneinheit;

include_once "Produceble.php";
include_once "Aufgabe.php";

use Produceble;
use Model\Lerneinheit\Aufgabe;

//Klasse für die Erstellung von Plusminusaufgaben
//Die Aufgaben werden generisch, gemäss der Schwierigkeitsstufe generiert

class PlusMinus implements Produceble
{

    private $stufe;
    private $range;
    private $question;


    public function __construct($stufe)
    {
        $this->stufe = $stufe;
        //Erstellung der Schwierigkeitsstufe
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

    private function getAufgaben()
    {
        $lerninhalt = [];

        for ($i = 0; $i < 99; $i++) {

            $aufgabe = $this->createQuestion();
            $lerninhalt[$i] = $aufgabe->getEncoded();
        }

        return $lerninhalt;
    }

    //Algorythmus zur Erstellung von Plusminusaufgaben
    private function createQuestion(){

        $factors = $this->createFactors($this->range);

        $answers = $this->createCalc($factors);

        $aufgabe = $this->orderAnswers($answers);

        return $aufgabe;

    }


    public function createFactors($range)
    {
        //Erstelle die Zahlen der Rechnung aus den einer Zufallszahl innerhalb der Range
        $factors =[0,0];

        $factors[0] = random_int(2, $range);
        $factors[1] = random_int($factors[0], $range);

        return $factors;
    }


    public function createCalc($factors)
    {
        $ans =[0,0,0,0];
        $operators = ["+", "-"];
        $operator = $operators[random_int(0, 1)];

        //Erstellen der Rechnung und der falschen Antworten
        if ($operator == '+') {
            $result = $factors[0] + $factors[1] . "";
            $wrong1 = ($factors[0] + 1) + $factors[1] . "";
            $wrong2 = ($factors[0] - 1) + $factors[1] . "";
            $wrong3 = $factors[0]  * $factors[1] . "";
        } else {
            $result = $factors[1] - $factors[0] . "";
            $wrong1 = ($factors[1] + 1) - $factors[0] . "";
            $wrong2 = ($factors[1] - 1) - $factors[0] . "";
            $wrong3 = $factors[0]  + 2 + $factors[1] . "";
        }

       $ans = [$result, $wrong1, $wrong2, $wrong3];

       //Falls eine Falsche Antwort gleich wie die richtige ist wird plus eins gerechnet
       for ($i=1; $i < 3; $i++) { 
           if ($ans[0] === $ans[$i]) {
               $ans[$i]++;
           }
       }

       $this->question = $factors[1] . ' ' . $operator . ' ' . $factors[0];

        return $ans;
    }


    public function orderAnswers($answers)
    {
            $ans = [0,0,0,0];
          //Zufällige Plazierung der richtigen Antwort
          $rightPlacement = random_int(0, 3);
          $ans[$rightPlacement] = $answers[0];
  
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

              //Platziere die falschen Antworten
        if ($ans[0] == "") {
            $ans[0] = $answers[1];
        } elseif ($ans[1] == "") {
            $ans[1] = $answers[1];
        } elseif ($ans[2] == "") {
            $ans[2] = $answers[1];
        } else {
            $ans[3] = $answers[1];
        }

        if ($ans[0] == "") {
            $ans[0] = $answers[2];
        } elseif ($ans[1] == "") {
            $ans[1] = $answers[2];
        } elseif ($ans[2] == "") {
            $ans[2] = $answers[2];
        } else {
            $ans[3] = $answers[2];
        }

        if ($ans[0] == "") {
            $ans[0] = $answers[3];
        } elseif ($ans[1] == "") {
            $ans[1] = $answers[3];
        } elseif ($ans[2] == "") {
            $ans[2] = $answers[3];
        } else {
            $ans[3] = $answers[3];
        }

        //Instanzierung eines Objekts des Typs Aufgabe
        return new Aufgabe(0, $this->question, $right, $ans[0], $ans[1],  $ans[2],  $ans[3], $this->stufe);
    }


}
