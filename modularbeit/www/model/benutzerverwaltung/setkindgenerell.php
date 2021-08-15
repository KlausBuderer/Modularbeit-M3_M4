<?php
require_once 'dbconnection.php';

class SetKindGenerell {

public function __construct($user_id,$bio,$kind,$geschlecht,$le_englisch,$le_deutsch,$le_mathematik,$le_realien,$le_bld_profil,$le_bld_avatar,$punkte,$guthaben,$kind_id,$eltern_id,$permission_id,$page_id)
{
  $this->user_id = $user_id;
  $this->bio = $bio;
  $this->kind = $kind;
  $this->geschlecht = $geschlecht;
  $this->le_englisch = $le_englisch;
  $this->le_deutsch = $le_deutsch;
  $this->le_mathematik = $le_mathematik;
  $this->le_realien = $le_realien;
  $this->le_bld_profil = $le_bld_profil;
  $this->le_bld_avatar = $le_bld_avatar;
  $this->punkte = $punkte;
  $this->guthaben = $guthaben;
  $this->kind_id = $kind_id;
  $this->eltern_id = $eltern_id;
  $this->permission_id = $permission_id;
  $this->page_id = $page_id;
}

// Erstellung Datenbankeintrag für Profil des Kindes
public function setkindprofil($id,$user_id,$bio,$kind,$geschlecht,$le_englisch,$le_deutsch,$le_mathematik,$le_realien,$le_bld_profil,$le_bld_avatar,$punkte,$guthaben)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

$sql =  "INSERT INTO profiles(id,user_id,bio,kind,geschlecht,le_englisch,le_deutsch,le_mathematik,le_realien,le_bld_profil,le_bld_avatar,punkte,guthaben) 
  VALUES ('id','this->user_id','this->bio','this->kind','this->geschlecht','this->le_englisch','this->le_deutsch','this->le_mathematik','this->le_realien','this->le_bld_profil','this->le_bld_avatar','this->punkte','this->guthaben');";
  $result = mysqli_query($conn, $sql);
  }

// Erstellung Datenbankeintrag für Verknüpfung Kind und Elternteil
public function setkindmatcheseltern($id,$kind_id,$eltern_id)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

$sql =  "INSERT INTO le_eltern_kind_matches(id,kind_id,eltern_id) 
  VALUES ('id','$this->kind_id','$this->eltern_id');";
  $result = mysqli_query($conn, $sql);
  }
}

/*
// Erstellung Datenbankeintrag für Verknüpfung Kind und Elternteil
public function setkindmatcheseltern($kind_id,$eltern_id)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

$sql =  "INSERT INTO le_eltern_kind_matches(id,kind_id,eltern_id) 
  VALUES ('id','$this->kind_id','$this->eltern_id');";
  $result = mysqli_query($conn, $sql);
    }
}
*/
?>