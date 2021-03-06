<?php

namespace Model\Lerneinheit;

use Model\Lerneinheit\DbConnection;

require_once 'DbConnection.php';

//Klasse für die Datenbeschaffung für das Anzeigen der Kinder in der Elternübersicht
class Elernuebersicht
{

    private $kinderDaten = array();
    private $userId;
    private $connection;



    public function __construct($userId)
    {
        $this->userId = $userId;

        $this->connection = new DbConnection();

        $this->getKinderData($this->fetchKinder());
    }


    public function getKinder()
    {

        return $this->kinderDaten;
    }

//Holt die zugewiesenen Kinder aus der Datenbank
    private function fetchKinder()
    {
        //sucht die Kinder des Elternteils
        $conn = $this->connection->buildConnection();
        $kinderIds = array();


        // Fetch Data from Database
        $sql = "SELECT kind_id from le_eltern_kind_matches WHERE eltern_id= $this->userId;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($kinderIds, $row['kind_id']);
        }

        return $kinderIds;
    }

//Holt die Daten der Kinder aus der Datenbank
    private function getKinderData($kinderIds)
    {

        $conn = $this->connection->buildConnection();

        $kind = array();
        $counter = 0;

        // Fetch Data from Database

        if (sizeof($kinderIds) == 0) {

            return;
        }

        for ($i = 0; $i <= sizeof($kinderIds) - 1; $i++) {

            $sql = "SELECT fname from users WHERE id= $kinderIds[$i];";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

                $kind[$counter] = array($row['fname'], $kinderIds[$i]);
                array_push($this->kinderDaten, $kind[$counter]);
                $counter++;
            }
        }
    }
}
