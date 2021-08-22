<?php
require_once('../../../includes/header.php');
require_once('../../../includes/navbar_eltern.php');
require_once('../../../includes/sidebar_eltern.php');
require_once('../../../model/benutzerverwaltung/setkindkonto.php');




// Übernahme aus Formular
$username = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];

// ................ACHTUNG Geschlecht muss noch übergbeen werden !  aus Formular...................
// Verprüfung Formular / Benutzername / E-Mail

$CreateKindKonto = new CreateKindKonto($username, $fname, $lname, $email, $password, $eltern_id);
$CreateKindKonto->setkontokind($username, $fname, $lname, $email, $password, $eltern_id);
