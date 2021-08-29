<?php
require_once('../../../public/header.php');
require_once('../../../public/navbar_eltern.php');
require_once('../../../public/sidebar_eltern.php');
require_once('../../../model/benutzerverwaltung/setkindkonto.php');

// Ermittelter Werte (ElternID, angemeldeter Benutzer
$eltern_id = $user->data()->id;

// Übernahme aus Formular
$username = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];

/*
if( isset($_POST['m']) ) {
    $gender = 'm';
}
elseif( isset($_POST['bla']) ) {
    $gender = 'm';
}
*/

// ................ACHTUNG Geschlecht muss noch übergbeen werden !  aus Formular...................
// Verprüfung Formular / Benutzername / E-Mail

$CreateKindKonto = new CreateKindKonto($username, $fname, $lname, $email, $password, $eltern_id);
$CreateKindKonto->setkontokind($username, $fname, $lname, $email, $password, $eltern_id);

echo '<form id="myForm" action="kind_hinzufuegen_erfolgreich.php" method="post">';

echo '<input type="hidden" name="status" value="'. $CreateKindKonto->getStatus().'">';
echo '<input type="hidden" name="fname" value="'. $fname.'">';

echo  '</form>';
echo '<script type="text/javascript">';
echo "document.getElementById('myForm').submit()";
echo '</script>';


