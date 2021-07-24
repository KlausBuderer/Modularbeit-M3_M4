<?php

include_once "dbconnection.php";
include_once "aufgabe.php";

class GetLerninhalt{

private $stufe;
private $tabelle;


public function __construct($stufe, $lerneinheit){

    $this->stufe = $stufe;
    $this->tabelle = $lerneinheit;

}

public function selectLerninhalt(){

return $this->fetchData();
}



private function fetchData(){

$lerninhalt = array();

//Verbindung zur DB aufbauen
$connection = new DbConnection();
$conn = $connection->buildConnection();

   // Fetch Data from Database
    $sql = "SELECT * from $this->tabelle;";
    $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){

        $ID = $row['ID'];
        $question = $row['question'];
        $rightAnswer = $row['rightAnswer'];
        $answerA = $row['A'];
        $answerB = $row['B'];
        $answerC = $row['C'];
        $answerD = $row['D'];

        $aufgabe =  new Aufgabe($ID, $question, $rightAnswer, $answerA, $answerB,  $answerC,  $answerD);
        $aufgabeArray = $aufgabe->getEncoded();
        $this->console_log($aufgabeArray);
        
        array_push($lerninhalt,$aufgabeArray); 
          
    }

    

    return $lerninhalt;
}


function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data). ')';
    echo '</script>';

}
}