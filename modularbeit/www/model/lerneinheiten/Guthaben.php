<?php

namespace Model\Lerneinheit;

require_once 'DbConnection.php';


//Klasse für das Lesen des Guthaben und der Punkte eines bestimmten Users
class Guthaben
{

    private $userId;
    private $punkte;
    private $guthaben;

    public function __construct($userId)
    {
        $this->userId = $userId;
        $this->fetchDb();
    }

    //Liest das aktuelle Mediengutscheinsguthaben aus der Datenbank
    public function setGuthaben($neuGuthaben)
    {
        $connection = new DbConnection();
        $conn = $connection->buildConnection();

        $sql =  "UPDATE profiles SET  guthaben= $neuGuthaben WHERE user_id= $this->userId;";

        $result = mysqli_query($conn, $sql);
    }

    public function getGuthaben()
    {

        return $this->guthaben;
    }

    public function getPunkte()
    {

        return $this->punkte;
    }

    //Liest das aktuelle Punkteguthaben aus der Datenbank
    private function fetchDb()
    {

        $connection = new DbConnection();
        $conn = $connection->buildConnection();


        $sql = "SELECT * from profiles WHERE user_id= $this->userId;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $this->punkte = $row['punkte'];
            $this->guthaben = $row['guthaben'];
        }
    }
}
