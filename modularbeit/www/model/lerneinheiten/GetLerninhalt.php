<?php

namespace Model\Lerneinheit;

use Model\Lerneinheit\DbConnection;
use Model\Lerneinheit\Aufgabe;
use Produceble;

include_once "DbConnection.php";
include_once "Aufgabe.php";


//Hilfsklasse für das Factory Pattern
//Holt Aufgaben aus der Datenbank und instanziert aus diesen Daten Objekte des Typs Aufgabe
class GetLerninhalt
{

    private $stufe;
    private $tabelle;


    public function __construct($stufe, $lerneinheit)
    {

        $this->stufe = $stufe;
        $this->tabelle = $lerneinheit;
    }

    public function selectLerninhalt()
    {

        return $this->fetchData();
    }

    private function fetchData()
    {

        $lerninhalt = array();

        //Verbindung zur DB aufbauen
        $connection = new DbConnection();
        $conn = $connection->buildConnection();

        // Holt Aufgaben aus der Datenbank
        $sql = "SELECT * from $this->tabelle WHERE stufe= $this->stufe;";
        $result = mysqli_query($conn, $sql);

        //Instanziert ein Objekt des Typs Aufgabe pro Zeile der Datenbank
        while ($row = mysqli_fetch_assoc($result)) {

            $ID = $row['ID'];
            $question = $row['question'];
            $rightAnswer = $row['rightAnswer'];
            $answerA = $row['A'];
            $answerB = $row['B'];
            $answerC = $row['C'];
            $answerD = $row['D'];

            $aufgabe =  new Aufgabe($ID, $question, $rightAnswer, $answerA, $answerB,  $answerC,  $answerD, $this->stufe);
            $aufgabeArray = $aufgabe->getEncoded();

            array_push($lerninhalt, $aufgabeArray);
        }

        return $lerninhalt;
    }
}
