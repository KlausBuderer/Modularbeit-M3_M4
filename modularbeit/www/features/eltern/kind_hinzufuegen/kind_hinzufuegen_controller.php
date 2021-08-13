<?php
require_once('../../../includes/header.php');
require_once('../../../includes/navbar_eltern.php');
require_once('../../../includes/sidebar_eltern.php');
require_once('../../../model/benutzerverwaltung/setkindkonto.php');

// Ermittlung ID des angemeldeten Benutzers
// $id = $user->data()->id;

//Klasse der Bearbeitung des Hinzufügen eines Kindes

// Tabellenfelder zum Anlegen des Kindes
// $id = "";
$permissions = 3;
$email = $_POST['email'];
// $email_new = $_POST["email"];
$username = $_POST["username"];
// $password = $_POST["email"];
// $pin = $_POST["email"];
$fname = $_POST["fname"];
// $lname = $_POST["lname"];
// $language = $_POST["email"];
// $email_verified = $_POST["email"];
// $vericode = $_POST["email"];
// $vericode_expiry = $_POST["email"];
// $oauth_provider = $_POST["email"];
// $oauth_uid = $_POST["email"];
// $gender = $_POST["email"];
// $locale = $_POST["email"];
// $gpluslink = $_POST["email"];
// $account_owner = $_POST["email"];
// $account_id = $_POST["email"];
// $account_mgr = $_POST["email"];
// $fb_uid = $_POST["email"];
// $picture = $_POST["email"];
// $created = $_POST["email"];
// $protected = $_POST["email"];
// $msg_exempt = $_POST["email"];
// $dev_user = $_POST["email"];
// $msg_notification = $_POST["email"];
// $cloak_allowed = $_POST["email"];
// $oauth_tos_accepted = $_POST["email"];
// $un_changed = $_POST["email"];
// $force_pr = $_POST["email"];
// $logins = $_POST["email"];
// $last_login = $_POST["email"];
// $join_date = $_POST["email"];
// $modified = $_POST["email"];
// $active = $_POST["email"];

// Checkboxen fest vorbelegt, aktuell ist keine dynamische Steuerung der Modulen vorgesehen.
$cboxmathematik  = "X";
$cboxdeutsch     = "X";
$cboxenglisch    = "X";
$cboxrealien     = "X";

// Felder für Profile Tabelle.
$id;
// $user_id = $id;
$bio;
$kind;
$geschlecht;
$le_englisch;
$le_deutsch;
$le_mathematik;
$le_realien;
$le_bld_profil;
$le_bld_avatar;

//
/*
INSERT INTO `itwisse_lernplattform`.`profiles`



echo $email . '<br>';
echo $username .  '<br>';
echo $fname .  '<br>';  
echo $cboxmathematik .  '<br>'; 
echo $user_id . <br>;

//Kind anlegen und Rückgabe ID zum letzten geschriebenen Datensatz (ID für Kind / Eltern Verknürpfung)
// $SetKindKonto = new SetKindKonto($permissions,$email,$email_new,$username,$password,$pin,$fname,$lname,$language,$email_verified,$vericode,$vericode_expiry,$oauth_provider,$oauth_uid,$gender,$locale,$gpluslink,$account_owner,$account_id,$account_mgr,$fb_uid,$picture,$created,$protected,$msg_exempt,$dev_user,$msg_notification,$cloak_allowed,$oauth_tos_accepted,$un_changed,$force_pr,$logins,$last_login,$join_date,$modified,$active);
// $SetKindKonto = new SetKindKonto();

//Profil zum Kind anlegen

//Verknüpfung Kind zum Eltern

//Permission für Kind


// $setLernfortschritt->setLernfortschritt();
*/
require_once('../../../includes/footer.php');