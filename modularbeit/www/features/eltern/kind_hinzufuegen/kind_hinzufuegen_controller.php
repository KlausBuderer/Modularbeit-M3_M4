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
$password = $_POST['password'];


if (isset($_POST['gender']))
{

   switch ($_POST['gender']) 
   {

      case 'M':   $gender = 'M';
                         break;

      case 'J':   $gender = 'J';
                         break;

   }
} 

// Verprüfung Formular / Benutzername / E-Mail

$CreateKindKonto = new CreateKindKonto($username, $fname, $lname, $email, $password, $eltern_id, $gender);
$CreateKindKonto->setkontokind($username, $fname, $lname, $email, $password, $eltern_id, $gender);

echo '<form id="myForm" action="kind_hinzufuegen_erfolgreich.php" method="post">';

echo '<input type="hidden" name="status" value="'. $CreateKindKonto->getStatus().'">';
echo '<input type="hidden" name="fname" value="'. $fname.'">';

echo  '</form>';
echo '<script type="text/javascript">';
echo "document.getElementById('myForm').submit()";
echo '</script>';

