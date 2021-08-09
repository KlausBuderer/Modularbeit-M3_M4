<?php

include_once "produceble.php";
include_once "aufgabe.php";

class EinXEins implements Produceble{

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

       // console_log($this->range);
}

public function produce()
{
return $this->getAufgaben();
}

private function getAufgaben(){
    $lerninhalt = [] ;

    for ($i=0; $i < 99; $i++) { 
        # code...
        $aufgabe = $this->createQuestion();
        $lerninhalt[$i] = $aufgabe->getEncoded();
      //  console_log($lerninhalt[$i]);
    }

    return $lerninhalt;
}

private function createQuestion(){

    $question = "";
    $right = "";

    $ans = ["","","",""];

    $factor1 = random_int(2,$this->range);
    $factor2 = random_int(2,$this->range);
    $result = $factor1 * $factor2 . "";
    $wrong1 = ($factor1 + 1) * $factor2 . "";
    $wrong2 = ($factor2 - 1) * $factor1 . "";
    $wrong3 = $factor1  + $factor2 . "";


    //Zufällige Plazierung der richtigen Antwort
    $rightPlacement = random_int(0,3);
    $ans[$rightPlacement] = $result;

    //Mappen der richtigen Antwort
    switch ($rightPlacement) {
        case '0':
            # code...
            $right = "A";
            break;
        case '1':
            # code...
            $right = "B";
            break;
        case '2':
            # code...
            $right = "C";
            break;
        case '3':
            # code...
            $right = "D";
            break;
        default:
            # code...
            break;
    }
    
    // Schreibe die Aufgabe
    $question = $factor1 . ' x ' . $factor2;

    //Platziere die falschen Antworten
    if ($ans[0] == "") {
        $ans[0] = $wrong1;
    }elseif ($ans[1] == "") {
       $ans[1] = $wrong1;
    }elseif ($ans[2] == "") {
        $ans[2] = $wrong1;
        # code...
    }else{
        $ans[3] = $wrong1;
    }
    
    if ($ans[0] == "") {
        $ans[0] = $wrong2;
    }elseif ($ans[1] == "") {
       $ans[1] = $wrong2;
    }elseif ($ans[2] == "") {
        $ans[2] = $wrong2;
        # code...
    }else{
        $ans[3] = $wrong2;
    }

    if ($ans[0] == "") {
        $ans[0] = $wrong3;
    }elseif ($ans[1] == "") {
       $ans[1] = $wrong3;
    }elseif ($ans[2] == "") {
        $ans[2] = $wrong3;
        # code...
    }else{
        $ans[3] = $wrong3;
    }



    return new Aufgabe(0, $question, $right, $ans[0], $ans[1],  $ans[2],  $ans[3], $this->stufe);
}





function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data). ')';
    echo '</script>';
    
    }
}