<?php

namespace Model\Lerneinheit;

// Klass um Punkte einem User zuzuweisen
class AddPointsToUser
{

    private $punkte;
    private $guthaben;
    private $guthabenSchwelle = 100;
    private $actualGuthaben;
    private $neuPunkte;
    private $userId;
    private $actualPoints;
    private $connection;

    public function __construct($punkte, $userId)
    {
        $this->punkte = $punkte;
        $this->userId = $userId;

        $this->connection = new DbConnection();

        $this->addPoints();
    }

    public function getNeuPunkte()
    {

        return $this->neuPunkte;
    }

    public function getActualGuthaben()
    {

        return $this->actualGuthaben;
    }

    private function addPoints()
    {

        //lesen der aktuelle Punkte des Users
        $this->fetchPunkte();

        //berechnen des neuen Punktestandes
        $this->neuPunkte = $this->calcPoints($this->actualPoints, $this->punkte);

        //Berechnen neuer Guthabenstand
        $this->checkGuthabenschwelle();

        //Schreibe neues Guthaben und Punkte in Db
        $this->schreibeDb();
    }


    private function fetchPunkte()
    {
        //lesen aktuelle Punkte und aktuelles Guthaben vom User
        //Verbindung zur DB aufbauen

        $conn = $this->connection->buildConnection();

        // Fetch Data from Database
        $sql = "SELECT punkte, guthaben from profiles WHERE user_id= $this->userId;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $this->actualPoints = $row['punkte'];
            $this->actualGuthaben = $row['guthaben'];
        }
    }

    private function calcPoints($actPoints, $punkte)
    {
        //Berechnet neuen Punktestand
        return $actPoints + $punkte;
    }

    private function checkGuthabenschwelle()
    {
        // Prüfe Guthabenschwelle erreicht
        if ($this->neuPunkte >= $this->guthabenSchwelle) {
            $this->neuPunkte -= $this->guthabenSchwelle;
            $this->actualGuthaben += 1;
        }
    }
    //Neue Punktzahl und Guthaben in Datenbank schreiben
    private function schreibeDb()
    {

        $conn = $this->connection->buildConnection();

        $sql =  "UPDATE profiles SET punkte= $this->neuPunkte, guthaben= $this->actualGuthaben WHERE user_id= $this->userId;";

        $result = mysqli_query($conn, $sql);
    }
}
