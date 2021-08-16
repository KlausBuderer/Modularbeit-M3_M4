<?php

include_once 'Dbconnection.php';




class SetLernfortschritt {

  private  $anzRichtige = 0;
  private  $anzFragen;
  private  $abbruch;
  private  $stufe;
  private  $lerneinheit;
  private  $lernmodul;
  private $date;
  private $punkte = 0;
  private $userId;
 

public function __construct($anzRichtige, $anzFragen, $abbruch, $stufe, $lerneinheit, $lernmodul, $userId)
{
    $this->anzRichtige = $anzRichtige;
    $this->anzFragen = $anzFragen;
    $this->stufe = $stufe;
    $this->lerneinheit = $lerneinheit;
    $this->lernmodul = $lernmodul;
    $this->userId = $userId;

    //Pruefen ob Lerneinheit abgebrochen wurde
    $this->abbruch = $abbruch;
    
  
    $this->date = $this->getDate();

    //Pruefen ob Lerneinheit erfolgreich abgeschlossen wurde
    if($this->lerneinheitErfolgreich() == true){
        $this->punkte = $this->calcPunkte();
    }

}

//Funktion für das Schreiben der Daten in die Datenbank
public function setLernfortschritt()
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

  $sql =  "INSERT INTO le_lernfortschritt(userid, datum, lerneinheit, anzfragengesamt, anzfragenkorrekt, vorzeitabbruch, gewichtung, punkteerreicht, beschreibung) 
  VALUES ('$this->userId', '$this->date', '$this->lerneinheit', '$this->anzFragen', '$this->anzRichtige', '$this->abbruch', '$this->stufe', '$this->punkte', '$this->lernmodul');";
  $result = mysqli_query($conn, $sql);

}

public function getPunkte()
{
    return $this->punkte;
}

//Berechnung der erreichten Punkte
private function calcPunkte()
{

$Fragen = $this->anzFragen;
$stufe = $this->stufe;
$result = 0;

// 100 * stufe / Anzahl Fragen * 2 gerundet auf Ganzzahlen
$result = round(100 * $stufe  / ($Fragen * 2));
return $result;
}

//Prüfen ob Lerneinheit erfolgreich absolviert wurde
private function lerneinheitErfolgreich(){

    if ($this->anzRichtige == 10){
        return true;
    }else{
        return false;
    }

}

//Datum ermitteln
private function getDate(){

date_default_timezone_set("Europe/Berlin");
$timestamp = time();

   return date("d.m.Y", $timestamp);
}

}